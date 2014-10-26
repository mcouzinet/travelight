<?php

namespace app\controllers;

use app\models\User;
use Parse\ParseObject;
use AlgoliaSearch\Client;
 
class ProductController extends GenericController {

	public function create() {

        if($this->request->data){

			$product = new ParseObject("Produits");
			$algolia  = new Client("16KEY7M17V", "f1ea7eed61f3cc5945a3a84556b3ffbf");

			$name = "Chaussure verte";
			$price = 56;
			 
			$product->set("name", $name);
			$product->set("price", $price);

			$productArray = array();
			$productArray['name'] = $name;
			$productArray['price'] = $price;

			$index = $algolia->initIndex('product');
			 
			try {
			  $product->save();
			  echo 'New object created with objectId: ' . $product->getObjectId();
			} catch (ParseException $ex) {
			  echo 'Failed to create new object, with error message: ' + $ex->getMessage();
			}

			$productArray['objectID'] = $product->getObjectId();

			$index->saveObject(array($productArray));
		
		}

        $this->set(array(
            'user' => User::current()
        ));

        return $this->render();
	}

	public function get() {

        $this->set(array(
            'user' => User::current()
        ));

		return $this->render();
	}
}

?>