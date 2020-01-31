<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use Auth;
use DB;
use Carbon\Carbon;

class PemainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request ){
        $id = Auth::user()->id;
        $this->validate($request, [
            'p_nama' => 'required|string',
            'p_nrp' => 'required|string|min:14|max:14',
            'p_nopung' => 'required|integer|min:1|max:99',
            'p_posisi' => 'required|string',
        ]);
        DB::BeginTransaction();
        try {
            $pemain = new Peserta;
            $pemain->id_tim = $id;
            $pemain->nama = $request->p_nama;
            $pemain->nrp = $request->p_nrp;
            $pemain->nopunggung = $request->p_nopung;
            $pemain->posisi = $request->p_posisi;
            $pemain->save();
            $pemain->created_at = Carbon::now();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        
    
        return redirect('/home')->with('success', 'Pemain Berhasil Ditambahkan');
    }

    public function edit(Request $request, $id){
        $peserta = peserta::find($id);
        $this->validate($request, [
            'p_nama' => 'required|string',
            'p_nrp' => 'required|string|min:14|max:14',
            'p_nopung' => 'required|integer|min:1|max:99',
            'p_posisi' => 'required|string',
        ]);
        DB::BeginTransaction();
        try {
            $peserta->nama = $request->p_nama;
            $peserta->nrp = $request->p_nrp;
            $peserta->nopunggung = $request->p_nopung;
            $peserta->posisi = $request->p_posisi;
            $pemain->updated_at = Carbon::now();
            $peserta->save();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        return redirect('/home')->with('success', 'Pemain Berhasil Diubah');
    }
    
    public function delete($id){
        DB::BeginTransaction();
        try {
            $peserta = peserta::find($id);
            $peserta->delete();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        return redirect('/home')->with('success', 'Pemain Berhasil Dihapus');
    }
}
