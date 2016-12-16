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

        if ($request->jumlah_susu > 0) {
            if ($request->check == 0) {
                $warna = $request->cek_warna;
                $rasa = $request->cek_rasa;
                $bau = $request->cek_bau;
                $pH = $request->pH;
                $protein = $request->protein;

                // melakukan pemeriksaan untuk menentukan kualitas susu
                if ($warna == 1 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8" 
                    && $protein == "2.5" && $protein == "2.6" && $protein == "2.7" && $protein == "2.8" && $protein == "2.9" 
                    && $protein == "3" && $protein == "3.1" && $protein == "3.2" && $protein == "3.3" && $protein == "3.4" 
                    && $protein == "3.5" && $protein == "3.6" && $protein == "3.7" && $protein == "3.8" && $protein == "3.9" 
                    && $protein == "4" && $protein == "4.1" && $protein == "4.2" && $protein == "4.3" && $protein == "4.4" 
                    && $protein == "4.5" && $protein == "4.6" && $protein == "4.7" && $protein == "4.8" && $protein == "4.9" 
                    && $protein == "5") {
                    $hasil = 1;
                } elseif($warna == 2 && $rasa == 1 && $bau == 1  && $pH == "6.3" || $pH == "6.4" || $pH == "6.5" || $pH == "6.6" || $pH == "6.7" || $pH == "6.8"
                    && $protein == "2.5" && $protein == "2.6" && $protein == "2.7" && $protein == "2.8" && $protein == "2.9" 
                    && $protein == "3" && $protein == "3.1" && $protein == "3.2" && $protein == "3.3" && $protein == "3.4" 
                    && $protein == "3.5" && $protein == "3.6" && $protein == "3.7" && $protein == "3.8" && $protein == "3.9" 
                    && $protein == "4" && $protein == "4.1" && $protein == "4.2" && $protein == "4.3" && $protein == "4.4" 
                    && $protein == "4.5" && $protein == "4.6" && $protein == "4.7" && $protein == "4.8" && $protein == "4.9" 
                    && $protein == "5") {
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
                    'pH' => $pH,
                    'protein' => $protein
                ]);

                // memasukkan data di array ke database
                Kualitas::create($input);
                return redirect('/dash/rekap')->with('message', 'Data berhasil disimpan');
            } else{
                return redirect('/dash/rekap')->with('message', 'Gagal, cek hari ini sudah ada');
            }
        } else{
            return redirect('/dash/rekap')->with('message', 'Gagal, data tidak valid ');
        }
        
    }


    // menampilkan detail kualitas susu berdasarkan id
    public function detailKualitas($id){
        $users = User::admin()->get();
        $detailKualitas = Kualitas::findOrFail($id);
        return view('detail-kualitas', compact('detailKualitas', 'users'));
        
    }
}
