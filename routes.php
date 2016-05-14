<?php

use Acme\Models\Testimonial as Testimonial;
use Acme\Models\User as User;

$router->map("GET", "/", 'Acme\Controller\PageController@getShowHomePage', "home");

$router->map("GET", "/login", 'Acme\Controller\RegisterController@getShowLoginPage', "login");

$router->map("GET", "/register", 'Acme\Controller\RegisterController@getShowRegisterPage', "register");

$router->map("POST", "/register", 'Acme\Controller\RegisterController@postShowRegisterPage', "register_post");

$router->map("GET", "/database", 'Acme\Controller\PageController@ShowDbPage', "database");


$router->map("GET", "/[*]" , 'Acme\Controller\PageController@getShowPage', "pages");
