<?php

require __DIR__.'/../vendor/autoload.php';

$router = new \Bramus\Router\Router();
$router->setBasePath('/');

/*
|--------------------------------------------------------------------
| Define you application routes here
|--------------------------------------------------------------------
|
| For using middleware, route parameters, custom 404 responses etc.
| See the router docs: https://github.com/bramus/router
|
*/

$router->get('/', '\App\Controller@index');
// $router->get('/item/{id}', '\App\Controller@item');

$router->run();
