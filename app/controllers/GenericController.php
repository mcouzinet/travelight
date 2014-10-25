<?php

namespace app\controllers;

use Parse\ParseClient;
 
class GenericController extends \lithium\action\Controller {

	public function _init() {

		parent::_init();

		$app_id = "B2tOurg3EBdmHwJo507WL9nklW5d0qch21VU8bxK";
		$rest_key = "KypKH2xhxpjVyOtA74xByMr0IT0ZOjEjCWBbruc7";
		$master_key = "QsbIi9EtcYxeUJu7wjeLwBCLsjt3spOGlZognpnf";

		ParseClient::initialize( $app_id, $rest_key, $master_key );
	}
}

?>