<?php 

require 'core/Router.php';
require 'core/Database.php';
require 'core/Job.php';
require 'core/Candidate.php';
require 'controllers/PagesController.php';
require 'controllers/JobController.php';
require 'controllers/CandidatesController.php';



$router = new Router();


$uri = trim(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));


$uriArr = explode("/", $uri);

$getValue = NULL;
if ($uriArr[0] == "jobs" && $uriArr[1] != "list") {
	$uri = $uriArr[0];
	$getValue = $uriArr[1];
}

if ($uriArr[0] == "candidates" && $uriArr[1] != "list") {
	$uri = $uriArr[0] . "/" . $uriArr[1];
	$getValue = $uriArr[2];
}

require 'routes.php';

//var_dump($router->routes);