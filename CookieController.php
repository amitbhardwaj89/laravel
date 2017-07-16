<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
	public function set(){
		$response = new Response();
		$response->withCookie(cookie('name','xyz123',$min=1));
		return $response;
	}
	public function get(Request $req){
		$val = $req->cookie('name');
		echo $val;
	}
}
