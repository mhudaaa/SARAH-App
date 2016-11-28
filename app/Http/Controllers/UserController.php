<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller{

    public function detailUser(){
        $users = User::admin()->get();
        return view('akun', compact('users'));
    }

     public function dash(){
        $users = User::admin()->get();
        return view('dashboard', compact('users'));
    }

    public function ubahDataAkun(Request $request, $id){
        $user = User::find($id);
        $user->nama = $request->nama;  
        $user->username = $request->username;  
        $user->save();
        return redirect('/dash/akun')->with('message', 'Data berhasil diperbarui');
    }

    public function ubahDataPassword(Request $request, $id){
        $user = User::find($id);
        $user->password = md5($request->password);  
        $user->save();
        return redirect('/dash/akun')->with('message', 'Password berhasil diperbarui');
    }
}
