<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    //
	public function FetchFormVal(Request $req){
		echo $req->name;
		echo "<br>";
		echo $req->username;
	}
}
