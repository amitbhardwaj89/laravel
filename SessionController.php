<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
	public function showForm(Request $req){
		/* below method put is used to create a session, key, value type*/
		//$req->session()->put('data','some data is store in session');
		session()->flash('data','this is a flash message');
		return view('session.demo1');
		//dd(session());
	}
	public function displaySess(){
		/* used to delete the session*/
		//session()->forget('data');
		/*used to read a session */
		//dd(session()->get('data1','Dafault Value'));
		return redirect()->to('sessreq');
		//return view('session.demo1Show')->with('msg',$msg);
	}
}
