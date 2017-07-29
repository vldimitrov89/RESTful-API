<?php 

//and database stuff
require 'core/Database.php';
require 'core/Candidate.php';

$database = new Database();
$db = $database->getConnection();

//instanciq na Candidate
$candidate = new Candidate($db);
 
//vadim vsichki candidates ot database-a
$result = $candidate->readAll();

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
 	
    require "views/candidate_list.view.php";
} else {
    echo json_encode(
        array("message" => "There are no candidates")
    );
}

