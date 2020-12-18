<?php

use Illuminate\Support\Facades\Route;

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
    return view('base');
});

Route::get('/kategori', function () {
    return view('layout.kategori');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/base1', function () {
    return view('layout.base');
});

Route::get('/inputproyek', function () {
    return view('inputproyek.index');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});

Route::get('/dosen', function () {
    return view('dosen.index');
});

Route::get('/tentangmahasiswa', function () {
    return view('mahasiswa.tentang');
});

Route::get('/tentangdosen', function () {
    return view('dosen.tentang');
});

Route::get('/dashboard', function () {
    return view('layout.dashboard');
});