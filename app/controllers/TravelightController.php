<?php

namespace app\controllers;
 
use app\models\User;

class TravelightController extends GenericController {

	public function index() {


        error_log(print_r(User::current(),true));

        $this->set(array(
            'user' => User::current()
        ));
		
		return $this->render();
	}
}

?>