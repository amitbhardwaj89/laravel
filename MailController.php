<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
	public function basic_email(){
		$data = array('name'=>'Amit');
		Mail::send(['text'=>'mail'],$data,function($message){
			$message->to('amitsharmacse3@gmail.com','Amit Bhardwaj');
			$message->subject('first attempt to send email');
			$message->from('amit@siecindia.com','SIEC');
			$message->cc('amit@siecindia.com','Amit');
		});
	}
	public function attachment_email(){
		$data = array('name'=>'Amit');
		Mail::send('mail',$data,function($message){
			$message->to('amitsharmacse3@gmail.com','Amit Bhardwaj');
			$message->embed('C:\xampp\htdocs\laravel\uploads\facebook.png');
			$message->subject('attempt to send attachment email');
			$message->cc('amit@siecindia.com','SIEC');
		});
	}
}
