<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kualitas;
use App\Model\User;
use App\Model\Rasa;
use App\Model\Warna;
use App\Model\Bau;

class KualitasController extends Controller{

    public function index(){
        $users = User::admin()->get();
    	$kualitass = Kualitas::all();
        $jmlBaik = Kualitas::where('hasil', 1)->count();
        $jmlCukup = Kualitas::where('hasil', 2)->count();
        $jmlTidakBaik = Kualitas::where('hasil', 3)->count();

        if ($jmlBaik > $jmlCukup && $jmlBaik > $jmlTidakBaik) {
            $hasil = "Baik";
        } elseif($jmlCukup > $jmlBaik && jmlCukup > $jmlTidakBaik){
            $hasil = "Cukup";
        } else{
            $hasil = "Tidak Baik";
        }
    	return view('rekap', compact('kualitass', 'users', 'hasil'));	
    }

    public function formTambahKualitas(){
        $users = User::admin()->get();
        return view('tambah-kualitas', compact('users'));    
    }

    public function tambahKualitas(Request $request){
    	Kualitas::create($request->all());
    	return redirect('/dash/rekap')->with('message', 'Data berhasil disimpan');
    }

    public function detailKualitas($id){
        $users = User::admin()->get();
        $detailKualitas = Kualitas::findOrFail($id);
        return view('detail-kualitas', compact('detailKualitas', 'users'));
        
    }

    // public function showEdit($id){


    //  $detailPasien = Pasien::findOrFail($id);
    //  // return $detailPasiens;
    //  return view('admin.update', compact('detailPasien'));
        
    // }


    // public function ubahData(Request $request){
    // 	Pasien::update($request->all());
    // 	return redirect('/pasien');
    // }

}
