<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index')->with('alert', 'nothing');
    }

    // ======== CRUD ADMIN ========
    public function data_admin()
    {
    	$result = DB::table('user')->where('role', '=', 1)->get();
    	return view('admin.data-admin', ['result' => $result])->with('alert', 'nothing');
    }

    public function post_add_admin(Request $req)
    {
        $data = [
            'display_name' => $req->display_name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'tlp' => $req->tlp,
            'role' => 1
        ];

        DB::table('user')->insert($data);
        return redirect('admin/data-admin')->with('alert', 'add_sukses');
    }

    public function post_edit_admin(Request $req)
    {
        $data = [
            'display_name' => $req->display_name,
            'username' => $req->username,
            'tlp' => $req->tlp,
        ];

        DB::table('user')->where('id', '=', $req->id)->update($data);
        return redirect('admin/data-admin')->with('alert', 'edit_sukses');
    }

    public function delete_admin($id)
    {
        DB::table('user')->where('id', '=', $id)->delete();
        return redirect('admin/data-admin')->with('alert', 'delete_sukses');
    }

    // ======== CRUD PETUGAS ========
    public function data_petugas()
    {
        $result = DB::table('user')->where('role', '=', 2)->get();
        return view('admin.data-petugas', ['result' => $result])->with('alert', 'nothing');
    }

    public function post_add_petugas(Request $req)
    {
        $data = [
            'display_name' => $req->display_name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'tlp' => $req->tlp,
            'role' => 2
        ];

        DB::table('user')->insert($data);
        return redirect('admin/data-petugas')->with('alert', 'add_sukses');
    }

    public function post_edit_petugas(Request $req)
    {
        $data = [
            'display_name' => $req->display_name,
            'username' => $req->username,
            'tlp' => $req->tlp,
        ];

        DB::table('user')->where('id', '=', $req->id)->update($data);
        return redirect('admin/data-petugas')->with('alert', 'edit_sukses');
    }

    public function delete_petugas($id)
    {
        DB::table('user')->where('id', '=', $id)->delete();
        return redirect('admin/data-petugas')->with('alert', 'delete_sukses');
    }

    // ======== CRUD MASYARAKAT ========
    public function data_masyarakat()
    {
        $result = DB::table('masyarakat')->get();
        return view('admin.data-masyarakat', ['result' => $result])->with('alert', 'nothing');
    }

    public function post_add_masyarakat(Request $req)
    {
        $data = [
            'nik' => $req->nik,
            'display_name' => $req->display_name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'tlp' => $req->tlp,
        ];

        DB::table('masyarakat')->insert($data);
        return redirect('admin/data-masyarakat')->with('alert', 'add_sukses');
    }

    public function post_edit_masyarakat(Request $req)
    {
        $data = [
            'display_name' => $req->display_name,
            'username' => $req->username,
            'tlp' => $req->tlp,
        ];

        DB::table('masyarakat')->where('nik', '=', $req->nik)->update($data);
        return redirect('admin/data-masyarakat')->with('alert', 'edit_sukses');
    }

    public function delete_masyarakat($nik)
    {
        DB::table('masyarakat')->where('nik', '=', $nik)->delete();
        return redirect('admin/data-masyarakat')->with('alert', 'delete_sukses');
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
        return view('admin.pengaduan-baru', ['result' => $result])->with('alert', 'nothing');
    }

    public function detail_pengaduan($id)
    {
        $result = DB::table('pengaduan')->where('id', '=', $id)->first();
        return view('admin.detail-pengaduan', ['result' => $result]);
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
            return redirect('/admin/pengaduan/pengaduan-baru');

        }
        elseif ($action == "Terima & Tanggapi") {
            // Ubah Status Pengaduan 2
            // Redirect ke Form Tanggapi
            $values = [
                'status' => 2
            ];
            DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values);
            $data = DB::table('pengaduan')->where('id', '=', $id_pengaduan)->first();
            return redirect('/admin/pengaduan/tanggapi/'.$id_pengaduan);
        }
        else{
            // Ubah Status Pengaduan 3
            // Redirect ke Data Pengaduan
            $values = [
                'status' => 4
            ];
            DB::table('pengaduan')->where('id', '=', $id_pengaduan)->update($values);
            return redirect('/admin/pengaduan/pengaduan-baru');
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
        return view('admin.pengaduan-diproses', ['result' => $result])->with('alert', 'nothing');
    }

    public function tanggapi($id)
    {
        $result = DB::table('pengaduan')->where('id', '=', $id)->first();
        return view('admin.tanggapi-pengaduan', ['result' => $result]);
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

        return redirect('/admin/pengaduan/pengaduan-baru');


    }

    


}

