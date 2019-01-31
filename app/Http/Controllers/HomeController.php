<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Peserta;
use App\Official;
use App\FileBerkas;

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
        $jumpes = count($peserta);
        $jumof = count($official);
        $jumfile = count($fileberkas);
        return view('peserta.home',compact('peserta', 'no', 'official', 'no2', 'jumpes', 'jumof', 'fileberkas', 'jumfile'));
    }
}
