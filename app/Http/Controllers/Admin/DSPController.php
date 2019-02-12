<?php

namespace App\Http\Controllers\Admin;

use App\Peserta;
use App\User;
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
        $tim = user::find($id); 
        return view('admin.dsp',  compact('pemain','no', 'tim'));
    }
}
