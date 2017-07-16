<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    //
	public function index(Request $request){
		echo $request->path();
		echo "<br>";
		echo $request->url();
	}
}
