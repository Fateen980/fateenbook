<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class SignupController extends Controller
{
    
	var $toEmail = '';

	function index(Request $request) {

         $this->validate($request, [
            'email' => 'required' ,
             
        ]);





	$this->toEmail = $request->email;


    $data = array(
        'name' => "fateenbook",

    	);

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('fateenlove@gmail.com', 'Fateenbook');

        $message->to($this->toEmail)->subject('Welcome To Fateenbook');

    });

    return view('emails.signUp');


	}	

}
