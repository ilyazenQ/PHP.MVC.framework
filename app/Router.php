<?php 

namespace App;
use App\Exceptions\RouteNotFoundException;

class Router {
   private array $routes;

   public function getRoutes() {
      return $this->routes;
   }

   public function register(string $route, $action):self {

      $this->routes[$route]  = $action;
      return $this;

   }

   public function resolve(string $requestUri) {

      $route = explode('?',$requestUri)[0];
      $action = $this->routes[$route] ?? null;
   
   if(!$action) {
      throw new RouteNotFoundException();
   }
    if(is_callable($action)) {

      return call_user_func($action);
    }

    if(is_array($action)) {

      [$class, $method] = $action;
    

      if(class_exists($class)) {

         $class = new $class();
      }

      if(method_exists($class,$method)) {

         return call_user_func_array([$class,$method],[]);

      }
    }

   }
}