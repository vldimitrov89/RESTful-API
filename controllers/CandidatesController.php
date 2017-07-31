<?php 

class CandidatesController extends PagesController
{
	protected $modelName = 'Candidate';
	protected $model = null;
	
	public function __construct(){
		//create instance of Candidate
		$this->model = new $this->modelName();
	}
	public function listAll()
	{

		//get all jobs from the database
		$result = $this->model->getAll();

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0){
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
			return;
		}
		
				 
		  //array that will hold records to pass to json_encode
		$candidateArr["records"] = [];
	 

		while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
	 
			array_push($candidateArr["records"], $queries);
		}
		
		echo json_encode($candidateArr);
	}

	public function getOne($candidateId)
	{

		//review a candidate from the database
		$result = $this->model->review($candidateId);

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0) else {
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
			return ;
		}
		
		//array that will hold records to pass to json_encode
		$candidateArr["records"] = [];
	 

		while ($queries = $result->fetch(PDO::FETCH_ASSOC)){

			array_push($candidateArr["records"], $queries);
		}
		
		echo json_encode($candidateArr);
	}

	public function search($candidateId)
	{

		//search candidates from the database
		$result = $this->model->search($candidateId);

		//count the results
		$numberResults = $result->rowCount();

		if($numberResults>0){
		    echo json_encode(
		        array("message" => "There are no candidates")
		    );
			return;
		}
		
		
		//array that will hold records to pass to json_encode
		$candidateArr["records"] = [];
	 
		while ($queries = $result->fetch(PDO::FETCH_ASSOC)){
	 
			array_push($candidateArr["records"], $queries);
		}
		
		echo json_encode($candidateArr);
	}
}