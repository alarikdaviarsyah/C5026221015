<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $mobil = DB::table('mobil')->get();

    	// mengirim data pegawai ke view index
		return view('MobilIndex',['mobil' => $mobil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('MobilTambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if ($request->stockmobil > 0) $status = "y";
        else $status = "n";

		// insert data ke table pegawai
		DB::table('mobil')->insert([
			'kodemobil' => $request->kodemobil,
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('MobilEdit',['mobil' => $mobil]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if ($request->stockmobil > 0) $status = "y";
        else $status = "n";

		// update data pegawai
		DB::table('mobil')->where('kodemobil',$request->id)->update([
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $status,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('kodemobil',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

    // method cari pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('MobilIndex',['mobil' => $mobil]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
        return view('MobilView',['mobil' => $mobil]);

	}
}
