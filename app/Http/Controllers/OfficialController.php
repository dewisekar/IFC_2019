<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Official;
use Auth;
use Carbon\Carbon;

class OfficialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request ){
        $id = Auth::user()->id;
        $this->validate($request, [
            'o_nama' => 'required|string',
            'o_posisi' => 'required|string',
        ]);
        DB::BeginTransaction();
        try {
            $official = new Official;
            $official->id_tim = $id;
            $official->nama = $request->o_nama;
            $official->noidentitas = $request->o_noidentitas;
            $official->posisi = $request->o_posisi;
            $official->created_at = Carbon::now();
            $official->save();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }

    
        return redirect('/home')->with('success', 'Official Berhasil Ditambahkan');
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'o_nama' => 'required|string',
            'o_posisi' => 'required|string',
        ]);
        DB::BeginTransaction();
        try {
            $official = official::find($id);
            $official->nama = $request->o_nama;
            $official->noidentitas = $request->o_noidentitas;
            $official->posisi = $request->o_posisi;
            $official->updated_at = Carbon::now();
            $official->save();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        return redirect('/home')->with('success', 'Official Berhasil Diubah');
    }

    public function delete($id){
        $official = official::find($id);
        $official->delete();
        return redirect('/home')->with('success', 'Official Berhasil Dihapus');
    }
}
