<?php

//$router->define(
//    [
//        '' => 'controllers/index.php',
//        'about' => 'controllers/about.php',
//        'about/culture' => 'controllers/about-culture.php',
//        'contact' => 'controllers/contact.php',
//        'cnames' => 'controllers/add-name.php' // only for POST types
//    ]
//);c

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

//$router->get('about', 'controllers/about.php');
//$router->get('about/culture', 'controllers/about-culture.php');
//$router->post('names', 'controllers/add-name.php');



