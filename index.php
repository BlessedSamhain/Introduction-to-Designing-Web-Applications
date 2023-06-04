<?php

require "Routing.php";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('projects', 'DefaultController');

Routing::get('accountcreatedsuccessfully', 'DefaultController');
Routing::get('addtocart', 'DefaultController');
Routing::get('bookunavailable', 'DefaultController');
Routing::get('cart', 'DefaultController');
Routing::get('changepassword', 'DefaultController');
Routing::get('createaccount', 'DefaultController');
Routing::get('enteryoushippingaddres', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('passwordchangedsuccessfully', 'DefaultController');
Routing::get('settings', 'DefaultController');
Routing::get('thanksforshopping', 'DefaultController');
Routing::get('wetrytosend', 'DefaultController');
Routing::get('whathappend', 'DefaultController');
Routing::get('whatyouarelooking', 'DefaultController');
Routing::get('wherecourierneedstogo', 'DefaultController');
Routing::get('yeswehaveitbook', 'DefaultController');

Routing::post('login', 'SecurityController');

Routing::run($path);