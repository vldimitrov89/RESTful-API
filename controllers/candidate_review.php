<?php 

require 'core/Database.php';
require 'core/Candidate.php';

$database = new Database();
$db = $database->getConnection();

//instanciq na Job
$candidate = new Candidate($db);

if (isset($_GET['id'])) {
    $candidateId = $_GET['id'];
} else {
    $candidateId = NULL;
}


$result = $candidate->review($candidateId);

//broim kolko rezultata ima
$numberResults = $result->rowCount();

if($numberResults>0) {
 
 	//array koito shte dyrji records
    $candidateArr["records"]=array();
 

    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

    	//$queries['id'] stava na $id i ostanalite
        extract($queries);
 		
        $candidateItem=array(
            "id" => $id,
            "name" => $name,
            "position" => $position,
            "created_on" => $created_on
        );
 
        array_push($candidateArr["records"], $candidateItem);
    }
 	
    require "views/candidate_review.view.php";
} else {
    echo json_encode(
        array("message" => "There are no candidates")
    );
}

