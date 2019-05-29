

<?php

class Router {

    protected $routes =[];

    public function defineUri($routes)
     {
        $this->routes=$routes;
         
     }

    public function direct($url){

        if( array_key_exists($url, $this->routes)){
            return $this->routes[$url];
        }
        else Exception('No route for the URL');
       
    }
}