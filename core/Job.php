<?php 

class Job
{
	private $connection;
	
	public function __construct($db) {
        $this->connection = $db;
    }

    public function readAll() {

    	$sql = "SELECT * FROM jobs";
	    
	    // podgotvqme zaqvkata
	    $result = $this->connection->prepare($sql);
	    
	    // izpylnqvame
	    $result->execute();
	 
	    return $result;
    }

    public function readOne($id){
 
	    $sql = "SELECT * FROM jobs WHERE id = {$id}";
	 	
	    // podgotvqme zaqvkata
	    $result = $this->connection->prepare($sql);
	    // izpylnqvame
	    $result->execute();

	    return $result;
 	}
}