<?php 

require 'core/Router.php';


$router = new Router();

require 'routes.php';


$uri = trim(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));

//var_dump($uri);
require $router->direct($uri);