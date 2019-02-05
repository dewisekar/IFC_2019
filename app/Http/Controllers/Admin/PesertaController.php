<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Peserta;
use App\User;
use App\FileBerkas;
use App\Exports\PemainExport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }

    public function index(){
        $putra = count(user::whereIn('jenis',  ['0'])->get());
        $putri = count(user::whereIn('jenis',  ['1'])->get());
        $putra2 = count(user::whereIn('jenis',  ['0'])->whereIn('finalisasi', ['1'])->get());
        $putri2 = count(user::whereIn('jenis',  ['1'])->whereIn('finalisasi', ['1'])->get());
        $user = user::with("fileberkas")->get();
        $no = 1;
        return view('admin.peserta', compact('user', 'no', 'putra', 'putri', 'putri2', 'putra2'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'jenis' => ['required',],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->jenis = $request->jenis;
        $user->save();

        return redirect('../admin/peserta')->with('success', 'Tim Berhasil Ditambahkan');
    }

    public function delete($id){
        $user = user::find($id);
        $user->delete();
        return redirect('../admin/peserta')->with('success', 'Tim Berhasil Dihapus');
    }

    public function downloadfile($id)
    {
        $fileberkas = fileberkas::find($id);
        return Storage::download($fileberkas->filename, $fileberkas->title);
    }

    public function export() 
    {
        return Excel::download(new PemainExport, 'pemain.xlsx');
    }
}
