<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QNAController extends Controller
{
    public function mahasiswaHome()
	{
    		// mengambil data dari table pegawai
		$mahasiswas = DB::table('mahasiswas')->paginate(500);

    		// mengirim data pegawai ke view index
		return view('mahasiswas.index',['mahasiswas' => $mahasiswas]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mahasiswas = DB::table('tatausahas')
		->where('pertanyaan','like',"%".$cari."%")
		->paginate(500);

    		// mengirim data pegawai ke view index
		return view('mahasiswas.index',['mahasiswas' => $mahasiswas]);

	}
}
