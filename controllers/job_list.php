<?php 

//and database stuff
require 'core/Database.php';
require 'core/Job.php';

$database = new Database();
$db = $database->getConnection();

//instanciq na Job
$job = new Job($db);
 
//vadim vsichki jobs ot database-a
$result = $job->readAll();

//broim kolko rezultata ima
$numberResults = $result->rowCount();

if($numberResults>0) {
 
 	//array koito shte dyrji records
    $jobArr["records"]=array();
 

    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

    	//$queries['id'] stava na $id i ostanalite
        extract($queries);
 		
        $jobItem=array(
            "id" => $id,
            "position" => $position,
            "description" => $description,
            "created_on" => $created_on
        );
 
        array_push($jobArr["records"], $jobItem);
    }
 	
    require "views/job_list.view.php";
} else {
    echo json_encode(
        array("message" => "There are no jobs")
    );
}

