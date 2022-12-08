<?php

spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);
    $file = $root . "/" . str_replace("\\", '/', $class) . ".php";
    if (is_readable($file)) {
        require $root . "/" . str_replace("\\", "/", $class) . ".php";
    }
});

use Core\Router;

$router = new Router();

// Add the routes
$router->add('/', ['controller' => 'App\Controllers\HomeController', 'action' => 'index', 'request' => 'GET']);
$router->add('/users', ['controller' => 'App\Controllers\UserController', 'action' => 'index', 'request' => 'GET']);
$router->add(
    '/users',
    [
        'controller' => 'App\Controllers\UserController',
        'action' => 'show',
        'request' => 'GET',
        'args' => ['id']
    ]
);
$router->add('/users', ['controller' => 'App\Controllers\UserController', 'action' => 'store', 'request' => 'POST']);
$router->add('/users', ['controller' => 'App\Controllers\UserController', 'action' => 'update', 'request' => 'PUT']);
$router->add('/users', ['controller' => 'App\Controllers\UserController', 'action' => 'remove', 'request' => 'DELETE']);

// Get route from external URL
$url = $_SERVER['QUERY_STRING'];

// Check if route exists
if ($router->match($url)) {
    $router->dispatch();
} else {
    echo "No route found from URL $url";
}