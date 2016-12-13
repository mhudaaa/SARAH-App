<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

// Dashboard
Route::get('/dash', 'UserController@dash');

// Akun
Route::get('/dash/akun', function () {
    return view('akun');
});
Route::get('/dash/akun', 'UserController@detailUser');
Route::post('/dash/akun/ubahData&{id}', 'UserController@ubahDataAkun');
Route::post('/dash/akun/ubahDataPassword&{id}', 'UserController@ubahDataPassword');

// Vaksin
Route::get('/dash/vaksin', 'VaksinController@index');
Route::get('/dash/vaksin/tambah', 'VaksinController@formTambahVaksin');
Route::post('/dash/vaksin/add', 'VaksinController@tambahVaksin');
Route::get('/dash/vaksin/detail/{id}', 'VaksinController@detailVaksin');
Route::post('/dash/vaksin/ubahData&{id}', 'VaksinController@ubahDataVaksin');

// Kualitas Susu
Route::get('/dash/rekap', 'KualitasController@index');
Route::get('/dash/kualitas', 'KualitasController@formTambahKualitas');
Route::post('/dash/kualitas/add', 'KualitasController@tambahKualitas');
Route::get('/dash/kualitas/detail/{id}', 'KualitasController@detailKualitas');

// Jadwal
Route::get('/dash/jadwal', 'JadwalController@index');
Route::get('/dash/jadwal/ubah', 'JadwalController@formUbahJadwal');
Route::post('/dash/jadwal/ubahPagi', 'JadwalController@ubahPakanPagi');
Route::post('/dash/jadwal/ubahSiang', 'JadwalController@ubahPakanSiang');


