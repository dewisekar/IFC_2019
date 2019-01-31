<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileBerkas;
use Auth;
class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request ){
        $id = Auth::user()->id;
        $this->validate($request, [
            'file' => 'required|max:30000', // max 30MB
        ]);
        $uploadedFile = $request->file('file');
        $originalname = $request->file('file')->getClientOriginalName();
        $path = $uploadedFile->store('public/files');

        $fileberkas = new FileBerkas;
        $fileberkas->id_tim = $id;
        $fileberkas->title = $originalname;
        $fileberkas->filename = $path;
        $fileberkas->save();

        return redirect('/home')->with('success', 'Berkas Berhasil Diunggah');
    }
}
