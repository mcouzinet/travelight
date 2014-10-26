<?php

namespace app\controllers;
 
use app\models\User;

class TravelightController extends GenericController {

	public function index() {

        $this->set(array(
            'user' => User::current()
        ));
		
		return $this->render();
	}
}

?>