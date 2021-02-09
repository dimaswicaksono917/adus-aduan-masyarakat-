<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class MasyarakatController extends Controller
{
    public function index()
    {
    	return view('masyarakat.index');
    }

    public function data_pengaduan()
    {
    	$result = DB::table('pengaduan')->where('nik', '=', 1)->get();
    	return view('masyarakat.data-pengaduan', ['result' => $result])->with('alert', 'nothing');
    }
}
