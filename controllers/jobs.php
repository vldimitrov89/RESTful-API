<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require 'core/Job.php';

//create instance of Job
$job = new Job($db);

//check for passed id
if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
} else {
    $jobId = NULL;
}

$result = $job->getOne($jobId);

//count the result from the query
$numberResults = $result->rowCount();

if($numberResults>0) {
 
 	//array that will hold records to pass to json_encode
    $jobArr["records"] = [];
 

    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

        //$queries['id'] will be $id ...
        extract($queries);
 		
        $jobItem=[
            "id" => $id,
            "position" => $position,
            "description" => $description,
            "created_on" => $created_on
        ];
 
        array_push($jobArr["records"], $jobItem);
    }
 	
    echo json_encode($jobArr);
} else {
    echo json_encode(
        array("message" => "There are no jobs")
    );
}

