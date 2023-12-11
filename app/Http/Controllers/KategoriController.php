<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table belanja
        $kategori = DB::table('kategori')->get();
    	// mengirim data belanja ke view index
		return view('kategoriindex',['kategori' => $kategori]);

	}

    public function view(Request $request)
	{
		// menangkap data pencarian
		$input = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kategori = DB::table('kategori')
		->where('ID','like',"%".$input."%")
		->get();

    		// mengirim data pegawai ke view index
		return view('kategoriview',['kategori' => $kategori]);

	}
}
