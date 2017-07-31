<?php

// @TODO - Applay the same logic for JobController as CandidatesController
class JobController extends PagesController
{
	public function getOne($jobId)
	{

		//create instance of Job
		$job = new Job();

		//check for passed id

		$result = $job->getOne($jobId);

		//count the result from the query
		$numberResults = $result->rowCount();
		//var_dump($result);
		if($numberResults>0) {
		 
		 	//array that will hold records to pass to json_encode
		    $jobArr["records"] = [];
		 

		    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
		 
		        array_push($jobArr["records"], $queries);
		    }
		 	
		    echo json_encode($jobArr);
		} else {
		    echo json_encode(
		        array("message" => "There are no jobs")
		    );
		}
	}

	public function listAll()
	{
		$job = new Job();
 
		//get all jobs from the database
		$result = $job->getAll();

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0) {
		 
		 	//array that will hold records to pass to json_encode
		    $jobArr["records"] = [];
		 

		    while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
		 
		        array_push($jobArr["records"], $queries);
		    }
		 	
		    echo json_encode($jobArr);
		} else {
		    echo json_encode(
		        array("message" => "There are no jobs")
		    );
		}
	}
	
	public  function search(){
		echo json_encode(["message"=>"Not implemented yet"]);
	}
}