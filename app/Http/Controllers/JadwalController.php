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

}
