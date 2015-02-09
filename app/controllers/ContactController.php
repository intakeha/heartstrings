<?php

class ContactController extends BaseController {

	//Contact Form
	public function getContactUsForm(){

		//Get all the data and store it inside Store Variable
		$data = Input::all();

		//Validation rules
		$rules = array (
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		);

		//Validate data
		$validator  = Validator::make ($data, $rules);

		//If everything is correct than run passes.
		if ($validator -> passes()){

			//Send email using Laravel send function
			Mail::send('emails.hello', $data, function($message) use ($data)
			{
				//email 'From' field: Get users email add and name
				$message->from($data['email'] , $data['name']);
				//email 'To' field: cahnge this to emails that you want to be notified.                    
				$message->to('chon@woorus.com', 'Woorus')->subject('Contact Request');
			});

			$success_message = "Thanks! We'll reach out to you soon.";

			return $success_message;

		}else{
			$error_message = "Sorry, your message did not go through.";

			return $error_message;
			//return contact form with errors
			//return Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}
}
