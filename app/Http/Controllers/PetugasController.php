<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function index()
    {
    	return view('petugas.index');
    }

    public function data_petugas()
    {
        $result = DB::table('user')->where('role', '=', 2)->get();
        return view('petugas.data-petugas', ['result' => $result])->with('alert', 'nothing');
    }

    public function data_masyarakat()
    {
        $result = DB::table('masyarakat')->get();
        return view('petugas.data-masyarakat', ['result' => $result])->with('alert', 'nothing');
    }
}
