<?php

use lithium\net\http\Router;
use lithium\core\Environment;

Router::connect('/', 'Travelight::index');
Router::connect('/product', 'Product::create');
Router::connect('/product/{:id:}', 'Product::get');
Router::connect('/login', 'User::login');
Router::connect('/logout', 'User::logout');
Router::connect('/signup', 'User::signup');
Router::connect('/team', 'Travelight::team');


?>