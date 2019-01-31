<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Jersey;

class JerseyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request ){
        $id = Auth::user()->id;
        $this->validate($request, [
            'w_jersey' => 'required|string',
            'w_celana' => 'required|string',
            'w_kaoskaki' => 'required|string',
        ]);
        $jersey = new Jersey;
        $jersey->id_tim = $id;
        $jersey->jersey = $request->w_jersey;
        $jersey->celana = $request->w_celana;
        $jersey->kaoskaki = $request->w_kaoskaki;
        $jersey->save();
    
        return redirect('/home')->with('success', 'Warna Jersey Berhasil Diubah');
    }

    public function edit(Request $request, $id){
        $this->validate($request, [
            'w_jersey' => 'required|string',
            'w_celana' => 'required|string',
            'w_kaoskaki' => 'required|string',
        ]);
        $jersey = jersey::find($id);
        $jersey->jersey = $request->w_jersey;
        $jersey->celana = $request->w_celana;
        $jersey->kaoskaki = $request->w_kaoskaki;
        $jersey->save();
        return redirect('/home')->with('success', 'Warna Jersey Berhasil Diubah');
    }
}
