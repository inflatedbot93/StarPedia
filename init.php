<?php


spl_autoload_register(function($className) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/src/classes/' . $className . '.php';
});

// setup the routes that are valid

$router = new Router();
$router->add('/');
$router->add('/home');
$router->add('/index');

// locations
$router->add('/systems');

var_dump($router->getRoutes());
var_dump($router->validateCurrentRoute());

?>