
<?php

require '../Core/Bootstrap.php';

$router= new Router;

require '../Routes.php';

$uri= (trim($_SERVER['REQUEST_URI'], '/'.'ISELLERBUYER'.'Controller'));

var_dump($uri);

require $router->directUri($uri);
// require '../Views/Dashboard.view.php';
