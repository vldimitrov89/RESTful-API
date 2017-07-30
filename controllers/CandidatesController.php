<?php 

class CandidatesController extends PagesController
{
	public function candidatesList()
	{

		//create instance of Candidate
		$candidate = new Candidate();
		 
		//get all jobs from the database
		$result = $candidate->getAll();

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0) {
		 
		 	  //array that will hold records to pass to json_encode
		    $candidateArr["records"] = [];
		 

		    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
		 
		        array_push($candidateArr["records"], $queries);
		    }
		 	
		    echo json_encode($candidateArr);
		} else {
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
		}
	}

	public function candidatesReview($candidateId)
	{
		$candidate = new Candidate();

		//review a candidate from the database
		$result = $candidate->review($candidateId);

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0) {
		 
		 	//array that will hold records to pass to json_encode
		    $candidateArr["records"] = [];
		 

		    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

		        array_push($candidateArr["records"], $queries);
		    }
		 	
		    echo json_encode($candidateArr);
		} else {
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
		}
	}

	public function candidatesSearch($candidateId)
	{
		//create instance of Candidate
		$candidate = new Candidate();

		//search candidates from the database
		$result = $candidate->search($candidateId);

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0) {
		 
		 	//array that will hold records to pass to json_encode
		    $candidateArr["records"] = [];
		 
		    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
		 
		        array_push($candidateArr["records"], $queries);
		    }
		 	
		    echo json_encode($candidateArr);
		} else {
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
		}
	}
}