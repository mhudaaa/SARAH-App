<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Pakan;

class JadwalController extends Controller{

    public function index(){
        $users = User::admin()->get();
        $pakan = Pakan::all();
        return view('jadwal-pakan', compact('users', 'pakan'));	
    }

    public function formUbahJadwal(){
        $users = User::admin()->get();
        $pagi = Pakan::pagi()->get();
        $siang = Pakan::siang()->get();
        return view('ubah-jadwal', compact('users', 'pagi', 'siang'));    
    }

    public function ubahPakanPagi(Request $request){
        if ($request->jml_pakan > 0 && $request->jml_air > 0) {
            $pakan = Pakan::find(1);
            $pakan->jml_pakan  = $request->jml_pakan;  
            $pakan->jml_air  = $request->jml_air;  
            $pakan->save();
            return redirect('/dash/jadwal')->with('message', 'Data berhasil diperbarui');
        } else{
            return redirect('/dash/jadwal')->with('message', 'Gagal. Data tidak valid');
        }
    }

    public function ubahPakanSiang(Request $request){
        if ($request->jml_pakan > 0 && $request->jml_air > 0) {
            $pakan = Pakan::find(2);
            $pakan->jml_pakan  = $request->jml_pakan;  
            $pakan->jml_air  = $request->jml_air;  
            $pakan->save();
            return redirect('/dash/jadwal')->with('message', 'Data berhasil diperbarui');
        } else{
            return redirect('/dash/jadwal')->with('message', 'Gagal. Data tidak valid');
        }   
    }

}
