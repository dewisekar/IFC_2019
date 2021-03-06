<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Peserta;
use App\User;
use App\FileBerkas;
use App\Exports\PemainExport;
use App\Exports\OfficialExport;
use App\Exports\TimExport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use DB;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }

    public function index(){
        $putra = count(user::whereIn('jenis',  ['Putra'])->get());
        $putri = count(user::whereIn('jenis',  ['Putri'])->get());
        $putra2 = count(user::whereIn('jenis',  ['Putra'])->whereIn('finalisasi', ['1'])->get());
        $putri2 = count(user::whereIn('jenis',  ['Putri'])->whereIn('finalisasi', ['1'])->get());
        $user = user::with("fileberkas")->get();
        $no = 1;
        return view('admin.peserta', compact('user', 'no', 'putra', 'putri', 'putri2', 'putra2'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'jenis' => ['required',],
        ]);

        DB::BeginTransaction();
        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->jenis = $request->jenis;
            $user->save();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();        }

        
        return redirect('/admin/peserta')->with('success', 'Tim Berhasil Ditambahkan');
    }

    public function delete($id){
        $user = user::find($id);
        DB::BeginTransaction();
        try {
            $user->delete();
            DB::commit();            
        } catch (Exception $e) {
            DB::rollback();
        }
        
        return redirect('/admin/peserta')->with('success', 'Tim Berhasil Dihapus');
    }

    public function downloadfile($id)
    {
        $fileberkas = fileberkas::find($id);
        return Storage::download($fileberkas->filename, $fileberkas->title);
    }

    public function export() 
    {
        return Excel::download(new TimExport, 'Data Pemain & Official Keseluruhan.xlsx');
    }
}
