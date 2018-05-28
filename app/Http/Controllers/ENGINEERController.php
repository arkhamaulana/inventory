<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ENGINEERController extends Controller
{
	public function index()
	{
		return view('engineer.dashboard-engineer');
	}
}
