<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    //POST 
    public function PostContactDetails(Request $request){
    		//INPUT TIME
    		$name=$request->name;
    		$email=$request->email;
    		$message=$request->message;

    		//SET TIME ZONE 
   			date_default_timezone_set("Asia/Kolkata");
   		 	$contact_time=date("h:i:sa");
	        $contact_date=date("d-m-Y");
  			
  			//INSERT
  			$result=Contact::insert([
			'name'=>$name,
			'email'=>$email,
			'message'=>$message,
			'contact_date'=>$contact_date,
			'contact_time'=>$contact_time
			]);

			return $result;

    }//end method

 
}
