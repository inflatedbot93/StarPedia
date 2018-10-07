<?php


spl_autoload_register(function($className) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/src/classes/' . $className . '.php';
});

// setup the routes that are valid

$router = new Router();
$router->add('/','index');
$router->add('/home');
$router->add('/index');

// locations
$router->add('/systems');

?>