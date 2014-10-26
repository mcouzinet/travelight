<?php

namespace app\controllers;

use app\models\User;
use Parse\ParseObject;
use AlgoliaSearch\Client;
 
class ProductController extends GenericController {

	public function create() {

        $product = new ParseObject("Produits");

        error_log(print_r($product,true));

        if($this->request->data){

            error_log(print_r($this->request->data, true));

			$product = new ParseObject("Produits");

            error_log(print_r($product,true));

			$name = $this->extractData('title', $this->request->data);
			$price = (int) $this->extractData('price', $this->request->data);
			$description = $this->extractData('description', $this->request->data);
			$short = substr($description, 0, 160) . '...';
			$city = $this->extractData('city', $this->request->data);
			$transaction = $this->extractData('transaction', $this->request->data);
            $tags = $this->extractData('tags', $this->request->data);
            $imgname = '/productimg/'.strtotime("now").$_FILES['imgproduct']['name'];
            $img_path = LITHIUM_APP_PATH . '/webroot/'.$imgname;
            if(move_uploaded_file($_FILES['imgproduct']['tmp_name'], $img_path)){

            };

			$product->set("name", $name);
			$product->set("price", $price);
			$product->set("description", $description);
			$product->set("shortdescription", $short);
			$product->set("town", $city);
			$product->set("owneruserid", User::current()->getObjectId());
			$product->set("urlpicture", $imgname);

			$productArray = array();
			$productArray['name'] = $name;
			$productArray['price'] = $price;
			$productArray['description'] = $description;
			$productArray['shortdescription'] = $short;
			$productArray['town'] = $city;
			$productArray['transaction'] = $transaction;
			$productArray['urlpicture'] = $imgname;
			$productArray['tags'] = explode(',', $tags);

			try {
			    $product->save();

                $algolia  = new Client("16KEY7M17V", "f1ea7eed61f3cc5945a3a84556b3ffbf");

                $index = $algolia->initIndex('product');

                $productArray['objectID'] = $product->getObjectId();
                $index->saveObject($productArray);

			} catch (ParseException $ex) {
			  error_log('Failed to create new object, with error message: ' + $ex->getMessage());
			}


		
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