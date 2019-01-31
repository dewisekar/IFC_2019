<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Official;
use Auth;

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
        $official = new Official;
        $official->id_tim = $id;
        $official->nama = $request->o_nama;
        $official->noidentitas = $request->o_noidentitas;
        $official->posisi = $request->o_posisi;
        $official->save();
    
        return redirect('/home')->with('success', 'Official Berhasil Ditambahkan');
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'o_nama' => 'required|string',
            'o_posisi' => 'required|string',
        ]);
        $official = official::find($id);
        $official->nama = $request->o_nama;
        $official->noidentitas = $request->o_noidentitas;
        $official->posisi = $request->o_posisi;
        $official->save();
        return redirect('/home')->with('success', 'Official Berhasil Diubah');
    }

    public function delete($id){
        $official = official::find($id);
        $official->delete();
        return redirect('/home')->with('success', 'Official Berhasil Dihapus');
    }
}
