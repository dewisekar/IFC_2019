<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Jersey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\JerseyExport;
use Maatwebsite\Excel\Facades\Excel;

class JerseyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }

    public function index(){
        $jersey = user::with("jersey")->get();
        $no = 1;
        return view('admin.jersey', compact('jersey', 'no'));
    }

    public function download(){
        return Excel::download(new JerseyExport, 'Daftar Warna Jersey.xlsx');
    }


}
