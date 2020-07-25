<?php

namespace App\Core;

class Router
{
  public $routes = [
    'GET' => [],
    'POST' => []
  ];


  public static function load($file)
  {
    $router = new static;
    require $file;
    return $router;
  }


  // REGISTER ROUTES FOR THE GET METHODS AT THE CONTROLLER END POINT
  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }


  // REGISTER ROUTES FOR THE POST METHODS AT THE CONTROLLER END POINT
  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  // direct a route if the controller is associated
  public function direct($uri, $requestType)
  {
    // check if array key exists
    if (array_key_exists($uri, $this->routes[$requestType])) {
      // return the file path
      
      return $this->callAction(
        ...explode('@', $this->routes[$requestType][$uri])
      );
    }
    // display an error message if route is not defined
    throw new Exception('No route defined for this URI');
  }
  
  // the call to action method
  protected function callAction($controller, $action)
  {
    $controller = "App\\Controllers\\{$controller}";
    
    $controller = new $controller;
    // check if method exits
    if (! method_exists($controller, $action)) {
      throw new Exception(
        "{$controller} does not respond to the {$action} action."
      );
    }
    return $controller->$action();
  }
}