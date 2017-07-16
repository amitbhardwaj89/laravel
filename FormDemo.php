<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormDemo extends Controller
{
    //
	public function index(){
		return view('form1');
	}
	public function entry(){
		
		return view('demo1.form1');
	}
	public function crudoperation(Request $req){
		$this->validate($req,[
		'name'=>'bail|required|max:6',
		'roll'=>'required|numeric',
		'branch'=>'required',
		'institute'=>'required',
		]);
		$name = $req->input('name');
		$roll = $req->input('roll');
		$branch = $req->input('branch');
		$inst = $req->input('institute');
		if(Null!=$req->input('insert')){
			DB::insert('insert into new_table(name,roll,branch,institute) values(?,?,?,?)',[$name,$roll,$branch,$inst]);
			echo "<a href='entryform'>"."Click Here"."</a>";
		}
		if(Null!=$req->input('search')){
			$result=DB::select("select * from new_table");
			//$r = $result;
			return view('demo1.form1')->with('r',$result);
		}
		if(null!=$req->input('delete')){
			DB::delete("delete from new_table where id=?",[2]);
			return view('demo1.form1')->with('msg','1 row has been deleted.');
		}
		
	}
}
