<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \Skateboard\Wheels\Application(__DIR__);

/*
|--------------------------------------------------------------------
| Define you application routes here
|--------------------------------------------------------------------
|
| For using middleware, route parameters, custom 404 responses etc.
| See the router docs: https://github.com/bramus/router
|
*/

$app->get('/', '\App\Controller@index');

$app->run();
