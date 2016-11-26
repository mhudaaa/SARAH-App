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

Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/dash/kualitas', function () {
    return view('tambah-kualitas');
});

Route::get('/dash/rekap', function () {
    return view('rekap');
});

Route::get('/dash/kualitas/detail', function () {
    return view('detail-kualitas');
});
