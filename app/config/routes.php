<?php

use lithium\net\http\Router;
use lithium\core\Environment;

Router::connect('/', 'Travelight::index');
Router::connect('/product', 'Product::create');
Router::connect('/find', 'Product::find');
Router::connect('/login', 'User::login');


?>