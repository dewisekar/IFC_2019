<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileBerkas;
use Auth;
use Storage;
use DB;
use Carbon\Carbon;


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

        DB::BeginTransaction();
        try {
            $fileberkas = new FileBerkas;
            $fileberkas->id_tim = $id;
            $fileberkas->title = $originalname;
            $fileberkas->filename = $path;
            $fileberkas->created_at = Carbon::now();
            $fileberkas->save();
           
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        } 

        return redirect('/home')->with('success', 'Berkas Berhasil Diunggah');
    }

    public function download($id)
    {
        $fileberkas = fileberkas::find($id);
        return Storage::download($fileberkas->filename, $fileberkas->title);
    }
    
    public function delete($id){
        $fileberkas = fileberkas::find($id);
        DB::BeginTransaction();
        try {
            $fileberkas->delete();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        return redirect('/home')->with('success', 'Berkas Berhasil Dihapus');
    }

    public function dsp(){
        $path = "files/[2019] Form Kontrak.docx";
        return response()->download($path);
    }
}
