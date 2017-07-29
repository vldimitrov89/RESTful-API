<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require 'core/Candidate.php';

//create instance of Candidate
$candidate = new Candidate($db);
 
//get all jobs from the database
$result = $candidate->getAll();

//count the results
$numberResults = $result->rowCount();

if($numberResults>0) {
 
 	  //array that will hold records to pass to json_encode
    $candidateArr["records"] = [];
 

    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

    	//$queries['id'] will be $id ...
        extract($queries);
 		
        $candidateItem=[
            "id" => $id,
            "name" => $name,
            "position" => $position,
            "created_on" => $created_on
        ];
 
        array_push($candidateArr["records"], $candidateItem);
    }
 	
    echo json_encode($candidateArr);
} else {
    echo json_encode(
        array("message" => "There are no candidates")
    );
}

