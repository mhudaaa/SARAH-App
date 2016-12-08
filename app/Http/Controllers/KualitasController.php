<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kualitas;
use App\Model\User;
use App\Model\Rasa;
use App\Model\Warna;
use App\Model\Bau;

class KualitasController extends Controller{

    // Menampilkan daftar/rekap kualitas dari tb_kualitas
    public function index(){
        $users = User::admin()->get();
    	$kualitass = Kualitas::all();

        // menghitung jumlah masing-masing kategori kualitas
        $jmlBaik = Kualitas::where('hasil', 1)->count();
        $jmlCukup = Kualitas::where('hasil', 2)->count();
        $jmlTidakBaik = Kualitas::where('hasil', 3)->count();

        // kondisi untuk menentukan kualitas susu baik, cukup atau tidak baik
        if ($jmlBaik > $jmlCukup && $jmlBaik > $jmlTidakBaik) {
            $hasil = "Baik";
        } elseif($jmlCukup > $jmlBaik && jmlCukup > $jmlTidakBaik){
            $hasil = "Cukup";
        } else{
            $hasil = "Tidak Baik";
        }
    	return view('rekap', compact('kualitass', 'users', 'hasil'));	
    }

    // Menampilkan form tambah kualitas susu
    public function formTambahKualitas(){
        $users = User::admin()->get();
        return view('tambah-kualitas', compact('users'));    
    }

    // Melakukan proses tambah kualitas berdasarkan 
    public function tambahKualitas(Request $request){
        // mengambil data dari form tambah kualitas
        $warna = $request->cek_warna;
        $rasa = $request->cek_rasa;
        $bau = $request->cek_bau;
        $pH = $request->pH;

        // melakukan pemeriksaan untuk menentukan kualitas susu
        if ($warna == 1 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8") {
            $hasil = 1;
        } elseif($warna == 2 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8"){
            $hasil = 2;
        } else{
            $hasil = 3;
        }

        // menyimpan data ke array
        $input = ([
            'jumlah_susu' => $request->jumlah_susu,
            'cek_bau' => $bau,
            'cek_rasa' => $rasa,
            'cek_warna' => $warna,
            'hasil' => $hasil,
            'pH' => $pH
        ]);

        // memasukkan data di array ke database
        Kualitas::create($input);
    	return redirect('/dash/rekap')->with('message', 'Data berhasil disimpan');
    }


    // menampilkan detail kualitas susu berdasarkan id
    public function detailKualitas($id){
        $users = User::admin()->get();
        $detailKualitas = Kualitas::findOrFail($id);
        return view('detail-kualitas', compact('detailKualitas', 'users'));
        
    }
}
