<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileBerkas;
use Auth;
use Storage;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request ){
        $id = Auth::user()->id;
        $this->validate($request, [
            'file' => 'required|mimes:zip|max:30000', // max 30MB
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

    public function download($id)
    {
        $fileberkas = fileberkas::find($id);
        return Storage::download($fileberkas->filename, $fileberkas->title);
    }
    
    public function delete($id){
        $fileberkas = fileberkas::find($id);
        $fileberkas->delete();
        return redirect('/home')->with('success', 'Berkas Berhasil Dihapus');
    }
}
