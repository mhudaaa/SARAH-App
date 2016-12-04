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
    	// Kualitas::create($request->all());

        $warna = $request->cek_warna;
        $rasa = $request->cek_rasa;
        $bau = $request->cek_bau;
        $pH = $request->pH;

        if ($warna == 1 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8") {
            $hasil = 1;
        } elseif($warna == 2 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8"){
            $hasil = 2;
        } else{
            $hasil = 3;
        }

        $input = ([
            'jumlah_susu' => $request->jumlah_susu,
            'cek_bau' => $bau,
            'cek_rasa' => $rasa,
            'cek_warna' => $warna,
            'hasil' => $hasil,
            'pH' => $pH
        ]);

        Kualitas::create($input);
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
