<?php

namespace app\models;

use Parse\ParseUser;

class User extends \lithium\data\Model {

	protected static $_instance = null;

	public static function current() {

        if(is_null(self::$_instance)){

            $user = ParseUser::getCurrentUser();

            if($user){
                self::$_instance = $user;
            }

        }

        return self::$_instance;
    }


}