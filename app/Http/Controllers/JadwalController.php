<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vaksin;
use App\Model\User;

class JadwalController extends Controller{

    public function index(){
        $users = User::admin()->get();
        return view('jadwal-pakan', compact('users'));	
    }

    public function formTambahJadwal(){
        $users = User::admin()->get();
        return view('tambah-jadwal', compact('users'));    
    }

    // public function tambahVaksin(Request $request){
    // 	Vaksin::create($request->all());
    // 	return redirect('/dash/vaksin')->with('message', 'Data berhasil ditambahkan');
    // }

    // public function ubahDataVaksin(Request $request, $id){
    //     $vaksin = Vaksin::find($id);
    //     $vaksin->nama_vaksin = $request->nama_vaksin;  
    //     $vaksin->manfaat     = $request->manfaat;  
    //     $vaksin->tgl_vaksin  = $request->tgl_vaksin;  
    //     $vaksin->save();
    //     return redirect('/dash/vaksin')->with('message', 'Data berhasil diperbarui');
    // }

    // public function detailVaksin($id){
    //     $users = User::admin()->get();
    //     $vaksin = Vaksin::findOrFail($id);
    //     return view('edit-vaksin', compact('vaksin', 'users'));
        
    // }

}
