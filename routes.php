<?php
/**
 * Created by PhpStorm.
 * User: baby
 * Date: 5/9/2016
 * Time: 1:17 AM
 */

$router->map("GET", "/", 'Acme\Controller\PageController@getShowHomePage', "home");

$router->map("GET", "/login", 'Acme\Controller\RegisterController@getShowLoginPage', "login");

$router->map("GET", "/register", 'Acme\Controller\RegisterController@getShowRegisterPage', "register");

$router->map("POST", "/register", 'Acme\Controller\RegisterController@postShowRegisterPage', "register_post");

$router->map("GET", "/database", 'Acme\Controller\PageController@ShowDbPage', "database");
##$router->map("GET", "/", "PageController@ShowHomePage", "home");