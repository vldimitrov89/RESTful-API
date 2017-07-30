<?php 

$router->direct('', 'PagesController@home', $uriArr['getValue'], $uriArr['uri']);
$router->direct('jobs', 'JobController@jobs', $uriArr['getValue'], $uriArr['uri']);
$router->direct('jobs/list', 'JobController@jobsList', $uriArr['getValue'], $uriArr['uri']);
$router->direct('candidates/list', 'CandidatesController@candidatesList', $uriArr['getValue'], $uriArr['uri']);
$router->direct('candidates/review', 'CandidatesController@candidatesReview', $uriArr['getValue'], $uriArr['uri']);
$router->direct('candidates/search', 'CandidatesController@candidatesSearch', $uriArr['getValue'], $uriArr['uri']);