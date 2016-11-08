<?php
class ContactController extends BaseController {

	//Contact Form
	public function getContactUsForm(){
		
		/*** Working Code - Incorporated at the bottom *** 
		if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']){

			$secret = '6LfQMAsUAAAAAKKbyAkp6uM9u8Sjt1is95BcFsm8';
			$response = $_POST['g-recaptcha-response'];
			$remoteip = $_SERVER['REMOTE_ADDR'];
		
			$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip);
			
			$arr = json_decode($url,TRUE);
			if($arr['success']){
				$success_message = "Thanks! You got recapcha."; 
				return $success_message;
			}
			
		}else{
			$error_message = "Sorry, your did not get recapcha to work.";
			return $error_message;
		}
		*/
		/*var_dump($_POST);*/
		
		/*if(!isset($_POST['g-recaptcha-response']) ){
		    die ("Error: Not valid recaptcha on form");
		}
		*/	
		
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


		//If everything is correct then run passes.
		if ($validator -> passes()){

			//if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']){
			if (isset($data['recaptcha']) && $data['recaptcha']){

				$secret = '6LfQMAsUAAAAAKKbyAkp6uM9u8Sjt1is95BcFsm8';
				$response = $data['recaptcha'];
			
				$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
				
				$arr = json_decode($url,TRUE);
				if($arr['success']){
				
					//Send email using Laravel send function
					Mail::send('emails.hello', $data, function($message) use ($data)
					{
						//email 'From' field: Get users email add and name
						$message->from('info@heartstringsmusic.com' , 'Mailer');
						//email 'To' field: cahnge this to emails that you want to be notified.                    
						$message->to('info@heartstringsmusic.com', 'Mailer')->bcc('chon@woorus.com')->subject('Contact Request')->replyTo($data['email']);
					});
			
					$success_message = "Thanks! We'll reach out to you soon."; 
					return $success_message;
				}else{
					$error_message = "Sorry, your did not get reCAPTCHA to work.";
					return $error_message;
				}
			
			}else{
				$error_message = "Sorry, your did not get reCAPTCHA to work.";
				return $error_message;
			}
			
			
			//Send email using Laravel send function
			Mail::send('emails.hello', $data, function($message) use ($data)
			{
				//email 'From' field: Get users email add and name
				$message->from('info@heartstringsmusic.com' , 'Mailer');
				//email 'To' field: cahnge this to emails that you want to be notified.                    
				$message->to('info@heartstringsmusic.com', 'Mailer')->bcc('chon@woorus.com')->subject('Contact Request')->replyTo($data['email']);
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
