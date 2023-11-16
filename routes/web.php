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
