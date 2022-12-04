<?php

/**
 * Front controller
 * 
 * PHP Version 5.6
 */

require '../Core/Router.php';

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index', 'method' => 'GET']);
$router->add('posts',       ['controller' => 'PostController', 'action' => 'index', 'method' => 'GET']);
$router->add('posts/{id}',  ['controller' => 'PostController', 'action' => 'show', 'method' => 'GET']);
$router->add('posts',       ['controller' => 'PostController', 'action' => 'store', 'method' => 'POST']);
$router->add('posts',       ['controller' => 'PostController', 'action' => 'update', 'method' => 'PUT']);
$router->add('posts',       ['controller' => 'PostController', 'action' => 'remove', 'method' => 'DELETE']);

// Get route from external URL
$url = $_SERVER['QUERY_STRING'];

// Check if route exists
if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found from URL $url";
}