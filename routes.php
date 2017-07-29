<?php 

$router->direct('', 'PagesController@home', $getValue, $uri);
$router->direct('jobs', 'PagesController@jobs', $getValue, $uri);
$router->direct('jobs/list', 'PagesController@jobsList', $getValue, $uri);
$router->direct('candidates/list', 'PagesController@candidatesList', $getValue, $uri);
$router->direct('candidates/review', 'PagesController@candidatesReview', $getValue, $uri);
$router->direct('candidates/search', 'PagesController@candidatesSearch', $getValue, $uri);