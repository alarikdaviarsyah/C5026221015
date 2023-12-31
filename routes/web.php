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
    return view('welcome');
});

Route::get('tes', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return "Halo Apa Kabar";
});

Route::get('halo2', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return "<h1> Halo Apa Kabar<h1>";
});

Route::get('blog', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('blog');
});

Route::get('/html_intro', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas1');
});
Route::get('/css_intro', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas2');
});
Route::get('/js_intro', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas3');
});
Route::get('/js2', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas4');
});
Route::get('/linktree', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas5');
});
Route::get('/replika_web', function () {
    // Bisa diisi apa aja fungsi apa saja juga bisa
    return view('tugas6');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('/showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'App\Http\Controllers\PegawaiController@view');


Route::get('/test/env', function () {
    dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
});

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route CRUD
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

// Mobil
Route::get('/mobil','App\Http\Controllers\MobilController@index');
Route::get('/mobil/tambah','App\Http\Controllers\MobilController@tambah');
Route::post('/mobil/store','App\Http\Controllers\MobilController@store');
Route::get('/mobil/edit/{id}','App\Http\Controllers\MobilController@edit');
Route::post('/mobil/update','App\Http\Controllers\MobilController@update');
Route::get('/mobil/hapus/{id}','App\Http\Controllers\MobilController@hapus');
Route::get('/mobil/cari','App\Http\Controllers\MobilController@cari');
Route::get('/mobil/view/{id}', 'App\Http\Controllers\MobilController@view');

// kategori
Route::get('/kategori','App\Http\Controllers\KategoriController@index');

Route::get('/kategori/view','App\Http\Controllers\KategoriController@view');

