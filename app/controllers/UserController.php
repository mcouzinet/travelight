<?php

namespace app\controllers;

use Parse\ParseUser;
 
class UserController extends GenericController {

	public function signup() {

		$user = new ParseUser();
		$user->setUsername("foo");
		$user->setPassword("Q2w#4!o)df");
		try {
		  $user->signUp();
		} catch (ParseException $ex) {
		  // error in $ex->getMessage();
		}
		
		return $this->render();
	}


	public function login() {

		error_log(print_r($this->request->data,true));

		if($this->request->data){

			$user = new ParseUser();
			$user->setUsername($this->request->data["username"]);
			$user->setPassword($this->request->data["password"]);

			try {
			  $user->signUp();
			  error_log('GOOD');
			} catch (ParseException $ex) {
				error_log('BAD');
			  // error in $ex->getMessage();
			}

		}

		
		
		return $this->render();
	}
}

?>