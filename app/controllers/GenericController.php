<?php

namespace app\controllers;

use app\models\User;
use Parse\ParseClient;
 
class GenericController extends \lithium\action\Controller {

	public function _init() {

		parent::_init();

        session_start();

		$app_id = "B2tOurg3EBdmHwJo507WL9nklW5d0qch21VU8bxK";
		$rest_key = "KypKH2xhxpjVyOtA74xByMr0IT0ZOjEjCWBbruc7";
		$master_key = "QsbIi9EtcYxeUJu7wjeLwBCLsjt3spOGlZognpnf";

		ParseClient::initialize( $app_id, $rest_key, $master_key );

        User::current();

    }

    public function extractData($key, $array){

        if(!array_key_exists($key,$array)){
            return null;
        }

        return $array[$key];
    }

    protected function renderJSON($code, $msg)
    {
        return $this->_renderJSONMessage($code, $msg);
    }

    protected function renderError($code, $msg)
    {
        return $this->_renderJSONMessage($code, $msg);
    }

    private function _renderJSONMessage($code, $msg)
    {
        $data = array(
            'status' => $code,
            'type' => 'json',
            'data' => array('code' => $code, 'message' => $msg)
        );

        $this->response->status['code'] = $code;

        return $this->render($data);
    }
}

?>