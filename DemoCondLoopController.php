<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoCondLoopController extends Controller
{
    //
	public function index($name){
		return view('prg1',compact('name',$name));
	}
	public function secondprog($name,$lname){
		return view('prg2')->with('n',$name)->with('lname',$lname);
	}
	public function thirdprog(){
		$arr = ["fname"=>"AMIT","lname"=>"Bhardwaj"];
		return view('prg2')->with('res',$arr);
	}
}
