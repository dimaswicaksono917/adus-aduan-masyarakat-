<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function pengaduan_baru()
    {
        /* Status Pengaduan
        1 = terkirim
        2 = diproses
        3 = selesai
        4 = ditolak
        */

        $result = DB::table('pengaduan')->where('status', '=', 1)->get();
        return view('petugas.pengaduan-baru', ['result' => $result])->with('alert', 'nothing');
    }

    public function detail_pengaduan($id)
    {
        $result = DB::table('pengaduan')->where('id', '=', $id)->first();
        return view('petugas.detail-pengaduan', ['result' => $result]);
    }

    public function action_pengaduan(Request $request)
    {
        $id_pengaduan = $request->id_pengaduan;
        $action = $request->action;


        if ($action == "Terima") {
            // Ubah Status Pengaduan 2
            // Redirect ke Data Pengaduan
            $values = [
                'status' => 2
            ];
            DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values);
            return redirect('/petugas/pengaduan/pengaduan-baru');

        }
        elseif ($action == "Terima & Tanggapi") {
            // Ubah Status Pengaduan 2
            // Redirect ke Form Tanggapi
            $values = [
                'status' => 2
            ];
            DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values);
            $data = DB::table('pengaduan')->where('id', '=', $id_pengaduan)->first();
            return redirect('/petugas/pengaduan/tanggapi/'.$id_pengaduan);
        }
        else{
            // Ubah Status Pengaduan 3
            // Redirect ke Data Pengaduan
            $values = [
                'status' => 4
            ];
            DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values);
            return redirect('/petugas/pengaduan/pengaduan-baru');
        }
    }

    public function pengaduan_diproses()
    {
        /* Status Pengaduan
        1 = terkirim
        2 = diproses
        3 = selesai
        4 = ditolak
        */

        $result = DB::table('pengaduan')->where('status', '=', 2)->get();
        return view('petugas.pengaduan-diproses', ['result' => $result])->with('alert', 'nothing');
    }

    public function tanggapi($id)
    {
        $result = DB::table('pengaduan')->where('id', '=', $id)->first();
        return view('petugas.tanggapi-pengaduan', ['result' => $result]);
    }

    public function posttanggapan(Request $request)
    {
        // Ubah Status Pengaduan 3
        // Create Row tabel tanggapan
        $id_pengaduan = $request->id_pengaduan;
        $values_update = [
                'status' => 3
            ];
        DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values_update);

        DB::table('tanggapan')->insert([
            'id_pengaduan' => $id_pengaduan,
            'id_user' => Session::get('id'),
            'tanggapan' => $request->tanggapan,
        ]);

        return redirect('/petugas/pengaduan/pengaduan-baru');


    }


}
