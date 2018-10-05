<?php
/**
 * Created by PhpStorm.
 * User: Jessica
 * Date: 5/10/2018
 * Time: 2:02 PM
 */

class router
{
    /**
     * router constructor.
     */

    private $ROUTES = [];

    function __construct(){
        // setup the router once and include it in a initializer
    }

    // get current route

    /**
     * @return array|string
     */
    public function getCurrentRoute(){
        $request = parse_url($_SERVER['REQUEST_URI']);
        $path = $request["path"];

        $result = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

        $result = explode('/', $result);
        $max_level = 2;
        while ($max_level < count($result)) {
            unset($result[0]);
        }
        $result = '/'.implode('/', $result);

        return $result;
    }

    public function add($route){
        array_push($this->ROUTES,$route);
    }

    public function getRoutes(){
        return $this->ROUTES;
    }

    public function validateRoute($route):bool{
        if(!empty(trim($route,' '))){
            return true;
        }
        return false;
    }
    // validate current route

    // redirect route
}