<?php 

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