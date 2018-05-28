<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PEMINJAMANController extends Controller
{
	public function index()
	{
		return view('peminjaman');
	}
}
