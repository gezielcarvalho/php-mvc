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
    public function match($url)
    {
        $reg_exp = "^(.*:)//([A-Za-z0-9\-\.]+)(:[0-9]+)?(.*)$";

        if(preg_match($reg_exp, $url, $matches)){

            $params = [];
            
            foreach ($matches as $key => $match) {
               if (is_string($key)) {
                $params[$key] = $match;
               }
            }

            $this-> params = $params;
            return true;
        }
        return false;
    }

}