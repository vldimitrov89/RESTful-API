<?php 

$router->define([
	''=>'controllers/index.php',
	'jobs/list'=>'controllers/job_list.php',
	'jobs'=>'controllers/jobs.php',
	'candidates/list'=>'controllers/candidate_list.php',
	'candidates/review'=>'controllers/candidate_review.php',
	'candidates/search'=>'controllers/candidate_search.php'
]);