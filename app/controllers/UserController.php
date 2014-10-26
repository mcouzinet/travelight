<?php

namespace app\controllers;

use app\models\User;
use Parse\ParseUser;
use Parse\ParseException;
 
class UserController extends GenericController {

	public function signup() {

        $user = new ParseUser();

        if($this->request->data){

            $mail = $this->extractData("mail", $this->request->data);
            $password = $this->extractData("password", $this->request->data);

            $user->setUsername($mail);
            $user->setEmail($mail);
            $user->setPassword($password);

            try {

                $user->signUp();

                return $this->redirect('/');

            } catch (ParseException $ex) {
                $this->renderJSON(400, "Wrong credentials");
            }

        }

		
		return $this->render();
	}


	public function login() {

		if($this->request->data){

            $mail = $this->extractData("mail", $this->request->data);
            $password = $this->extractData("password", $this->request->data);

			try {

                error_log($mail);
                error_log($password);

                $user = ParseUser::logIn($mail, $password);
                User::current();

                return $this->redirect('/');

			} catch (ParseException $ex) {
                $this->renderJSON(400, "Wrong credentials");
			}

		}

        return $this->render();
	}


    public function logout() {

        ParseUser::logOut();

        return $this->redirect('/');

    }

}

?>