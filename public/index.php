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
$router->add('/posts', ['controller' => 'App\Controllers\PostController', 'action' => 'index', 'request' => 'GET']);
$router->add(
    '/posts',
    [
        'controller' => 'App\Controllers\PostController',
        'action' => 'show',
        'request' => 'GET',
        'args' => ['id']
    ]
);
$router->add('/posts', ['controller' => 'App\Controllers\PostController', 'action' => 'store', 'request' => 'POST']);
$router->add('/posts', ['controller' => 'App\Controllers\PostController', 'action' => 'update', 'request' => 'PUT']);
$router->add('/posts', ['controller' => 'App\Controllers\PostController', 'action' => 'remove', 'request' => 'DELETE']);

// Get route from external URL
$url = $_SERVER['QUERY_STRING'];

// Check if route exists
if ($router->match($url)) {
    echo '<pre>';
    $router->dispatch();
    echo '</pre>';
} else {
    echo "No route found from URL $url";
}