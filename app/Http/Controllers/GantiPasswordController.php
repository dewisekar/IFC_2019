<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class GantiPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('peserta.gantipassword');
    }

    public function ganti(Request $request){
        $this->validate($request, [
            'oldpass' => 'required',
            'newpass' => 'required|min:6|confirmed',
            'newpass_confirmation' => 'required|min:6',
        ]);
        
        if(Hash::check($request->newpass, Auth::user()->password) ){
            return redirect('../gantipassword')->with('danger', 'Password baru tidak bisa sama dengan password lama!'); 
        }
        if(Hash::check($request->oldpass, Auth::user()->password) ){
            DB::BeginTransaction();
            try {
                Auth::user()->password = Hash::make($request->newpass);
                Auth::user()->save();                
                DB::commit();            
            } catch (Exception $e) {
                DB::rollback();
            }
            return redirect('../gantipassword')->with('success', 'Password berhasil diubah!');  
        }
        else{
            return redirect('../gantipassword')->with('danger', 'Password lama salah!');  
        }
        
    }
}
