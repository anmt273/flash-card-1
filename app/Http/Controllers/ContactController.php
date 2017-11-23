<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class ContactController extends Controller
{
    //
    public function getContact(){
    	return  view('user.page.contactus');
    }
    public function postContact(Request $request){
    	$this->validate($request,[
    			'name'=>'required',
    			'email'=>'required',
    			'subject'=>'required',
    			'message'=>'required',
    		],[
    			'name.required'=>'Enter name',
    			'email.required'=>'Enter email',
    			'subject.required'=>'Enter subject',
    			'message.required'=>'Enter message',

    		]);
    	$data = ['name'=>$request->name,'mge'=>$request->message, 'email'=>$request->email,'subject'=>$request->subject];
    	Mail::send('email.blanks',$data,function($msg){
    		$msg->to('maian27396@gmail.com','An')->subject('abc');
    	});
    	echo "<script>
    		alert('Thank you for your feedback.');
    		window.location = '".url('course')."'
    	</script>";die;
    	
    }
}
