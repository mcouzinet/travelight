<?php

namespace app\models;

use Parse\ParseUser;

class User extends \lithium\data\Model {

	protected static $_instance = null;

	public static function current() {

        if(is_null(self::$_instance)){

            $currentUser = ParseUser::getCurrentUser();

            if($currentUser){
                self::$_instance = $currentUser;
            }
        }

        return self::$_instance;
    }


}