<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    		'password' => $password,
    	];

    	$user = DB::table('user')->where($where);
    	var_dump($user);
    }
}
