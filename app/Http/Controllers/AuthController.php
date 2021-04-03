<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function register()
    {
    	return view('auth.register');
    }

    public function cek_login(Request $req)
    {
    	$username = $req->username;
    	$password = $req->password;
    	$where = [
    		'username' => $username,
    	];

    	$admin = DB::table('user')->where($where)->first();
        $petugas = DB::table('user')->where($where)->first();
        $masyarakat = DB::table('masyarakat')->where($where)->first();

        if ($admin && $admin->role == 1) {
            $cek_password = Hash::check($password, $admin->password);
            $role = $admin->role;

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'id' => $admin->id,
                    'display_name' => $admin->display_name,
                    'username' => $admin->username,
                    'tlp' => $admin->tlp,
                    'role' => 1,
                ]);
                return redirect('/admin');
            }
            
        }

        elseif ($petugas && $petugas->role == 2) {
            $cek_password = Hash::check($password, $petugas->password);
            $role = $petugas->role;

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'id' => $petugas->id,
                    'display_name' => $petugas->display_name,
                    'username' => $petugas->username,
                    'tlp' => $petugas->tlp,
                    'role' => 2,
                ]);
                return redirect('/petugas');
            }

        }

        elseif ($masyarakat) {
            $cek_password = Hash::check($password, $masyarakat->password);

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'nik' => $masyarakat->nik,
                    'display_name' => $masyarakat->display_name,
                    'username' => $masyarakat->username,
                    'tlp' => $masyarakat->tlp,
                ]);
                return redirect('/masyarakat');
            }
        }    

        // Username dan Password salah
        else{
            return redirect('/login');
        }    

    }

    public function postregister(Request $req)
    {
        DB::table('masyarakat')->insert([
            'nik' => $req->nik,
            'display_name' => $req->display_name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'tlp' => $req->tlp,
        ]);

        return redirect('/login');
    }


    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    
}
