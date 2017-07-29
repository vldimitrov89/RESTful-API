<?php 

require 'core/Router.php';


$router = new Router();

require 'routes.php';


$uri = trim(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));


$uriArr = explode("/", $uri);

if ($uriArr[0] == "jobs" && $uriArr[1] != "list") {
	$uri = $uriArr[0];
}

if ($uriArr[0] == "candidates" && $uriArr[1] != "list") {
	$uri = $uriArr[0] . "/" . $uriArr[1];
}


require $router->direct($uri);