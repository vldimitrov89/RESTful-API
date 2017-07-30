<?php 

$router->direct('', 'PagesController@home', $getValue, $uri);
$router->direct('jobs', 'JobController@jobs', $getValue, $uri);
$router->direct('jobs/list', 'JobController@jobsList', $getValue, $uri);
$router->direct('candidates/list', 'CandidatesController@candidatesList', $getValue, $uri);
$router->direct('candidates/review', 'CandidatesController@candidatesReview', $getValue, $uri);
$router->direct('candidates/search', 'CandidatesController@candidatesSearch', $getValue, $uri);