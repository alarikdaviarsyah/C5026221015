<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $nilai = DB::table('nilaikuliah')->get();

        // mengirim data pegawai ke view index
        return view('NilaiKuliahIndex', ['nilai' => $nilai]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('NilaiKuliahTambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilaikuliah');
    }
}
