<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kualitas;
use App\Model\Rasa;
use App\Model\Warna;
use App\Model\Bau;

class KualitasController extends Controller{

    public function index(){
    	$kualitass = Kualitas::all();
    	return view('rekap', compact('kualitass'));	
    }

    public function tambahKualitas(Request $request){
    	Kualitas::create($request->all());
    	return redirect('/dash/rekap');
    }

    public function detailKualitas($id){
        $detailKualitas = Kualitas::findOrFail($id);
        // $rasa   = Rasa::all();
        // $warna  = Warna::all();
        // $bau    = Bau::all();
        return view('detail-kualitas', compact('detailKualitas'));
        
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
