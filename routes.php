<?php 
// think how to remove this $uriArr from this file.
// Make difference between URL and URI 
// URI is Uniform Resource Identifier
// URL is Uniform Resource Locator 
$router->get('', 'PagesController@home');
$router->get('jobs', 'JobController@getOne');
$router->get('jobs/list', 'JobController@listAll');
$router->get('candidates/list', 'CandidatesController@listAll');
$router->get('candidates/review', 'CandidatesController@getOne');
$router->post('candidates/search', 'CandidatesController@search');