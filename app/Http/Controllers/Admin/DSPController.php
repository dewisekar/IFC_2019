<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Peserta;
use App\User;
use App\Official;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DSPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }

    public function index($id){
        $no =1;
        $pemain = peserta::whereIn('id_tim', [$id])->orderBy('nopunggung', 'asc')->get();
        $coach = official::whereIn('id_tim', [$id])->whereIn('posisi', ['Pelatih'])->get();
        $manager = official::whereIn('id_tim', [$id])->whereIn('posisi', ['Manager'])->get();
        $tim = user::with("jersey")->find($id); 
        return view('admin.dsp',  compact('pemain','no', 'tim', 'coach', 'manager'));
    }

    public function total(){
        $tim = user::with("peserta")->with("official")->with("jersey")->get();                   
        return view('admin.dsptotal', compact('tim'));
    }
}
