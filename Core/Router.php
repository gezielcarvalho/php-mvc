<?php

/**
 * Router
 * 
 * PHP version 5.6
 */

class Router
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];

    /**
     * Add a route to the routing table
     * @param string $route The route URL
     * @param array  $params Parameters (controller, actio, etc)
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
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
     * Get all the params from the routing table
     * 
     * @return array  
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     * property ig a route is found
     * 
     * @param string $url The route URL
     * 
     * @return boolean true if a match found, false otherwise
     */
    public function match($query_string_received)
    {
        $reg_exp = "/[&=?]/";

        $query_parts = explode('/', $query_string_received);

        $route = '';
        foreach ($query_parts as $part) {
            if (preg_match($reg_exp,$part)) {
                $this->params[] = $part;
            } else {
                $route .= '/' . $part;
            }
        }

        if(array_key_exists($route, $this->routes)){
            return true;
        }

        $partial_route = '/'.implode(array_slice($query_parts,0,sizeof($query_parts)-1),'/');

        $this->params[] = $query_parts[sizeof($query_parts)-1];

        if(array_key_exists($partial_route, $this->routes)){
            return true;
        }
        
        return false;
    }

}