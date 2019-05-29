
<?php

require 'Core/bootstrap.php';

$router= new Router;


require 'Routes.php';

$uri= (trim( $_SERVER['REQUEST_URI'], '/'));

require $routes->direct($uri);
