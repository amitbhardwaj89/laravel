<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudInsertController extends Controller
{
    //
	public function index(){
		return view('stud_create');
	}
	public function insertfunc(Request $req){
		$name = $req->input('fname');
		DB::insert("insert into new_table(name) values(?)",[$name]);
		echo "<a href='showform'>"."Click Here"."</a>";
	}
	public function selectfunc(){
		$res = DB::select("select * from new_table");
		return view('stu_del',['r'=>$res]);
	}
	public function updfunc($name,$m){
		$i = DB::update("update new_table set name=? where id=?",[$name,$m]);
		echo "<a href='showform'>"."Click Here"."</a>";
	}
	public function delfunc($par){
		$j = DB::delete("delete from new_table where id=?",[$par]);
		echo "1 row has been deleted";
	}
}
