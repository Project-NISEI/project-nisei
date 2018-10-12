<?php

namespace App\Http\Controllers\Web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

	public function show()
	{

		$users = User::all();
		
		return view('pages/about/nisei');
	}

}