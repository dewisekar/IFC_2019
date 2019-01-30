<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use Auth;

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
        $pemain = new Peserta;
        $pemain->id_tim = $id;
        $pemain->nama = $request->p_nama;
        $pemain->nrp = $request->p_nrp;
        $pemain->nopunggung = $request->p_nopung;
        $pemain->posisi = $request->p_posisi;
        $pemain->save();
    
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
        $peserta->nama = $request->p_nama;
        $peserta->nrp = $request->p_nrp;
        $peserta->nopunggung = $request->p_nopung;
        $peserta->posisi = $request->p_posisi;
        $peserta->save();
        return redirect('/home')->with('success', 'Pemain Berhasil Diubah');
    }
    
    public function delete($id){
        $peserta = peserta::find($id);
        $peserta->delete();
        return redirect('/home')->with('success', 'Pemain Berhasil Dihapus');
    }
}
