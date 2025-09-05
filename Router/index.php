<?php

class Router
{
   protected $routes = [];

   public function regiterRoute($method, $uri, $controller)
   {
      $this->routes[] = [
         'method' => $method,
         'uri' => $uri,
         'controller' => $controller,
      ];
   }

   /**
    * @param string $uri
    * @param string $controller
    * @return void
    */
   public function get($uri, $controller)
   {
      $this->regiterRoute('GET', $uri, $controller);
   }

   /**
    * @param string $uri
    * @param string $controller
    * @return void
    */
   public function post($uri, $controller)
   {
      $this->regiterRoute('POST', $uri, $controller);
   }

   /**
    * @param string $uri
    * @param string $controller
    * @return void
    */
   public function put($uri, $controller)
   {
      $this->regiterRoute('PUT', $uri, $controller);
   }

   /**
    * @param string $uri
    * @param string $controller
    * @return void
    */
   public function delete($uri, $controller)
   {
      $this->regiterRoute('DELETE', $uri, $controller);
   }


   /**
    * @param int $http_code
    * 
    * @return void
    */
   public function error($http_code = 404)
   {
      http_response_code($http_code);
      handle_load_view("error/{$http_code}");
      exit;
   }


   /**
    * @param string $uri
    * @param string $method
    * @return void
    */
   public function route($uri, $method)
   {
      foreach ($this->routes as $route) {
         if ($route['method'] === $method && $route['uri'] === $uri) {
            require(get_base_path($route['controller']));
            return;
         }
      }

      $this->error();
   }
}
