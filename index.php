<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


// think how you can remove all of "require" from the file.
// http://php.net/manual/en/function.spl-autoload-register.php

require 'core/Router.php';
require 'core/Database.php';
require 'core/Job.php';
require 'core/Candidate.php';
require 'core/function.php';
require 'controllers/PagesController.php';
require 'controllers/JobController.php';
require 'controllers/CandidatesController.php';



$router = new Router();


$uriArr = getUrl($_SERVER['REQUEST_URI']);


require 'routes.php';

//var_dump($router->routes);