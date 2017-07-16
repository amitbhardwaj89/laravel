<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
	public function index(){
		return view('demo1.file_upl');
	}
	public function receivefile(Request $req){
		$file = $req->file('image');
		//print_r($file);
		echo "File name: ".$file->getClientOriginalName();
		echo "<br>";
		echo "Extension: ".$file->getClientOriginalExtension();
		echo "<br>";
		echo "Memory size: ".$file->getSize();
		echo "<br>";
		echo "Real Path: ".$file->getRealPath();
		echo "<br>";
		echo "Mime type: ".$file->getMimeType();
		//move uploaded file
		//$dest_path = 'uploads';
		$file->move(base_path().'/uploads',$file->getClientOriginalName());
	}
}
