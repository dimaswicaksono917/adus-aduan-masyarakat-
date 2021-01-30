<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Http\Request;

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




    


}

