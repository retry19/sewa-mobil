<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\User;

class AuthController extends Controller
{
 	// Fungsi untuk login
 	public function login()
 	{
 		return view('auths.login');
 	}

 	public function smlogin(Request $request)
 	{
 		if (Auth::attempt($request->only('email', 'password'))) {
 			return redirect('admin');
 		}
 		else 
 		return redirect('login');
 	}

 	// fungsi untuk logout
 	public function logout()
 	{
 		Auth::logout();
 		return redirect('login');
 	}

 	// fungsi untuk menampilkan view daftar
 	public function daftar()
 	{
 		return view('auths.register');
 	}

 	// fungsi untuk register
 	public function register(Request $req)
 	{
 		$this->validate($req, [
 			'nama'=>'required',
 			'email'=>'required|email',
 			'password'=>'required|confirmed|min:6'
 		]);
 		
 		$password = bcrypt($req->password);

 		User::create([
 			'name'=>$req->nama,
 			'email'=>$req->email,
 			'password'=>$password
 		]);
 		return redirect('login')->with('akun', 'Akun telah berhasil dibuat!');
 	}
}
