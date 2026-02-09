<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QNATUController extends Controller
{
    public function index()
    {
        //$tatausahas = DB::table('tatausahas')->get();
        $tatausahas = DB::table('tatausahas')->paginate(500);

    	// mengirim data pegawai ke view index
        return view('dashboard.index',['tatausahas' => $tatausahas]);
    }
    public function dbtu()
    {
        $tatausahas = DB::table('tatausahas')->paginate(20000);

    	// mengirim data pegawai ke view index
        return view('dashboardtu',['tatausahas' => $tatausahas]);
    }

    public function tambah()
    {
    	// mengambil data dari table pegawai
    	$tambahs = DB::table('tatausahas')->get();

    	// mengirim data pegawai ke view index
    	return view('dashboard.tambah',['tambah' => $tambahs]);

    }
    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('tatausahas')->insert([
		'pertanyaan' => $request->pertanyaan,
		'jawaban' => $request->jawaban,
			]);
	// alihkan halaman ke halaman pegawai
	$tatausahas = DB::table('tatausahas')->get();

    	// mengirim data pegawai ke view index
        return view('dashboard.index',['tatausahas' => $tatausahas]);

}
public function edit($id)
{

    // mengambil data pegawai berdasarkan id yang dipilih
	$tatausahas = DB::table('tatausahas')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('dashboard.edit',['tatausahas' => $tatausahas]);

}
public function update(Request $request)
{

    // update data pegawai
	DB::table('tatausahas')->where('id',$request->id)->update([
		'pertanyaan' => $request->pertanyaan,
		'jawaban' => $request->jawaban,
	]);
	// alihkan halaman ke halaman pegawai
	$tatausahas = DB::table('tatausahas')->get();

    	// mengirim data pegawai ke view index
        return view('dashboard.index',['tatausahas' => $tatausahas]);
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tatausahas')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	$tatausahas = DB::table('tatausahas')->get();

    	// mengirim data pegawai ke view index
        return view('dashboard.index',['tatausahas' => $tatausahas]);
}
}
