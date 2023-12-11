<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // mengambil data dari table kategori
        $kategori = DB::table('kategori')->get();

        // mengirim data kategori ke view index
        return view('kategoriindex', ['$kategori' => $kategori]);
    }
}
