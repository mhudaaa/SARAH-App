<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller{

    // Menampilkan detail user
    public function detailUser(){
        $users = User::admin()->get();
        return view('akun', compact('users'));
    }

    // Menampilkan halaman dashboard/beranda
    public function dash(){
        $users = User::admin()->get();
        return view('dashboard', compact('users'));
    }

    // Mengubah data akun (username dan nama)
    public function ubahDataAkun(Request $request, $id){
        $user = User::find($id);
        $user->nama = $request->nama;  
        $user->username = $request->username;  
        $user->save();
        return redirect('/dash/akun')->with('message', 'Data berhasil diperbarui');
    }

    // Mengubah data password
    public function ubahDataPassword(Request $request, $id){
        $user = User::find($id);
        $user->password = md5($request->password);  
        $user->save();
        return redirect('/dash/akun')->with('message', 'Password berhasil diperbarui');
    }
}
