<?php
/**
 * Created by PhpStorm.
 * User: Harley
 * Date: 5/10/2018
 * Time: 2:02 PM
 */

class Router
{
    /**
     * router constructor.
     */

    private $ROUTES = [];

    function __construct(){
        // setup the router once and include it in a initializer
    }
    /**
     * @return array|string
     */
    public function getCurrentRoute(){
        $request = parse_url($_SERVER['REQUEST_URI']);
        $path = $request["path"];

        $result = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

        $result = explode('/', $result);
        $max_level = 5;
        while ($max_level < count($result)) {
            unset($result[0]);
        }
        $result = '/'.implode('/', $result);

        return $result;
    }

    public function add($route = '/', $controller = '/'){

        $this->ROUTES[$route] = ['route'=>$route,'controller' => $controller];
    }

    public function getRoutes():array{
        $res = [];
        foreach ($this->ROUTES as $route){
            array_push($res,$route['route']);
        }
        return $res;
    }
    public function getControllers():array{
        $res = [];
        foreach ($this->ROUTES as $route){
            array_push($res,$route['controller']);
        }

        return $res;
    }

    public function getRouteController($route){

        //var_dump($this->ROUTES[$route]["controller"]);
    }

    public function validateRoute($route):bool{
        foreach($this->ROUTES as &$route){
            if($route === $route){
                return true;
            }
        }
        return false;
    }

    public function validateCurrentRoute():bool{
        return $this->validateRoute($this->getCurrentRoute());
    }
    // validate current route

    // redirect route

    // TODO breakup the url and determine the path to take to get the right page
    //->
    private function splitRoute($route):array{
        return [];
    }

    private function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }

}