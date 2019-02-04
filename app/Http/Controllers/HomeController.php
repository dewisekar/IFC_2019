<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Peserta;
use App\Official;
use App\FileBerkas;
use App\Jersey;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $no = 1;
        $no2 = 1;
        $peserta = peserta::where('id_tim', $id)->get();
        $official = official::where('id_tim', $id)->get();
        $fileberkas = fileberkas::where('id_tim', $id)->get();
        $jersey = jersey::where('id_tim', $id)->get();
        $jumjes = count($jersey);
        $jumpes = count($peserta);
        $jumof = count($official);
        $jumfile = count($fileberkas);
        return view('peserta.home',compact('peserta', 'no', 'official', 'no2', 'jumpes', 'jumof', 'fileberkas', 'jumfile', 'jersey', 'jumjes'));
    }

    public function finalisasi(Request $request ){
        $this->validate($request, [
            'final' => 'required',
            'jumjes' => 'required|integer|min:1',
            'jumof' => 'required|integer|min:1',
            'jumpes' => 'required|integer|min:1',
            'jumfile' => 'required|integer|min:1',
        ]);
        $user = user::find(Auth::user()->id);
        $user->finalisasi = '1';
        $user->save();
        return redirect('/home')->with('success', 'Data berhasil terfinalisasi.');
    }

}
