<?php

/**
 * Router
 * 
 * PHP version 5.6
 */

namespace Core;

class Router
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * String containig the route extracted from URL
     * @var array
     */
    protected $incomingRoute = '';

    /**
     * String containig the parameters extracted from URL
     * @var array
     */
    protected $incomingParams = '';

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];
    /**
     * Parameters from the matched route
     * @var array
     */
    protected $executionPackage = [];

    /**
     * Add a route to the routing table
     * @param string $route The route URL
     * @param array  $params Parameters (controller, actio, etc)
     */
    public function add($route, $params)
    {
        $this->routes[] = array('route' => $route, 'params' => $params);
    }

    /**
     * Get all the routes from the routing table
     * 
     * @return array  
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Get execution information such as controller, method and arguments
     * 
     * @return array  
     */
    public function getExec()
    {
        return $this->executionPackage;
    }
    /**
     * Get all the params from the routing table
     * 
     * @return array  
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Get incoming route
     * 
     * @return array  
     */
    public function getIncomingRoute()
    {
        return $this->incomingRoute;
    }

    /**
     * Get all the params from the routing table
     * 
     * @return array  
     */
    public function getIncomingParams()
    {
        return $this->incomingParams;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     * property ig a route is found
     * 
     * @param string $url The route URL
     * 
     * @return boolean true if a match found, false otherwise
     */
    public function match ($query_string_received)
    {
        $reg_exp = "/[&=?]/";

        $query_parts = explode('/', $query_string_received);

        foreach ($query_parts as $part) {
            if (preg_match($reg_exp, $part)) {
                $this->incomingParams = rtrim($part, "/");
                ;
            } else {
                $this->incomingRoute .= '/' . rtrim($part, "/");
                ;
            }
        }

        if ($this->validateRoute($this->incomingRoute, $this->incomingParams)) {
            return true;
        }

        $this->incomingRoute = '/' . implode( '/',array_slice($query_parts, 0, sizeof($query_parts) - 1));
        $this->incomingParams = $query_parts[sizeof($query_parts) - 1];

        if ($this->validateRoute($this->incomingRoute, $this->incomingParams)) {
            return true;
        }

        return false;
    }

    private function validateRoute($incomingRoute, $incomingParams)
    {
        $request = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if ($route['route'] === $incomingRoute && $route['params']['request'] === $request && !($incomingParams xor isset($route['params']['args']))) {
                $this->executionPackage = array_merge($route['params'], ['payload' => $incomingParams]);
                return true;
            }
        }
        return false;
    }

    public function dispatch()
    {

        $controller = $this->executionPackage['controller'];
        $action = $this->executionPackage['action'];

        if (class_exists($controller)) {
            $controller_object = new $controller($this->executionPackage);
            if (is_callable([$controller_object, $action])) {
                $controller_object->$action();
            } else {
                throw new \Exception("Method $action (in controller $controller) not found");
            }
        } else {
            throw new \Exception("Controller class $controller not found");
        }
    }

}