<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
	public function index(){
		echo "<br>"."Test controller";
	}
	public function second(){
		echo "<br>"."Second";
	}
	
}
