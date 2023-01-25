<?php

$router->get('groceries', 'controllers/index.php');
$router->get('groceries/create', 'controllers/create.php');
$router->post('add-grocery', 'controllers/add-grocery.php');
$router->get('arrays', 'controllers/arrays.php');

// var_dump($router);
