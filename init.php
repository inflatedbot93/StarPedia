<?php

require_once ("./src/classes/router.php");

$router = new router();
$router->add('/locations');

var_dump($router->getRoutes());

var_dump($router->validateRoute(' / '));
?>