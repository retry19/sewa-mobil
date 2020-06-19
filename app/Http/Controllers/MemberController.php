<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
  // Menampilkan view Member
  public function index()
  {
  	return view('member');
  }
}
