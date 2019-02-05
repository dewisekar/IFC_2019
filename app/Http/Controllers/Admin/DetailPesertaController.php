<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\PemainPertimExport;
use App\Exports\GabunganPertimExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Peserta;
use App\User;
use App\FileBerkas;
use App\Official;
use Storage;

class DetailPesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }

    public function index($id){
        $no =1; $no2 = 1;
        $pemain = peserta::whereIn('id_tim', [$id])->get();
        $official = official::whereIn('id_tim', [$id])->get();
        $fileberkas = fileberkas::whereIn('id_tim', [$id])->get();
        $tim = user::find($id); 
        return view('admin.detailpeserta',  compact('pemain','no', 'tim', 'no2', 'official', 'fileberkas'));
    }

    public function download($id) 
    {
        $tim = user::find($id); 
        return (new GabunganPertimExport($id))->download( $tim->name.'-'.$tim->jenis.'.xlsx');
    }
}
