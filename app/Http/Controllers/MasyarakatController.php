<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Session;

class MasyarakatController extends Controller
{
    public function index()
    {
    	return view('masyarakat.index');
    }

    public function data_pengaduan()
    {
    	$result = DB::table('pengaduan')->where('nik', '=', Session::get('nik'))->get();
    	return view('masyarakat.data-pengaduan', ['result' => $result])->with('alert', 'nothing');
    }

    public function buat_pengaduan()
    {
    	return view('masyarakat.buat-pengaduan-baru');
    }

    public function postpengaduan(Request $request)
    {
    	DB::table('pengaduan')->insert([
    		'nik' => Session::get('nik'),
    		'judul_laporan' => $request->judul_laporan,
    		'isi_laporan' => $request->isi_laporan,
    		// 'foto' => $request->foto,
    		'status' => 1
    	]);

    	return redirect('/masyarakat/data-pengaduan');
    }

    public function detail_tanggapan($id)
    {
    	$data_pengaduan = DB::table('pengaduan')->where('id', '=', $id)->first();
    	$data_tanggapan = DB::table('tanggapan')->where('id_pengaduan', '=', $id)->first();
    	$data_admin = DB::table('user')->where('id', '=', $data_tanggapan->id_user)->first();
    	return view('masyarakat.detail-tanggapan', ['data_pengaduan' => $data_pengaduan, 'data_tanggapan' => $data_tanggapan, 'data_admin' => $data_admin]);
    }
}
