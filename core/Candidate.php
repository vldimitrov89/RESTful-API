<?php 

class Candidate
{
	private $connection;
	
	public function __construct($db) {
        $this->connection = $db;
    }

    public function readAll() {

    	$sql = "SELECT * FROM candidates";
	    
	    // podgotvqme zaqvkata
	    $result = $this->connection->prepare($sql);
	    
	    // izpylnqvame
	    $result->execute();
	 
	    return $result;
    }

    public function review($id){
 
	    $sql = "SELECT * FROM candidates WHERE id = {$id}";
	 	
	    // podgotvqme zaqvkata
	    $result = $this->connection->prepare($sql);
	    // izpylnqvame
	    $result->execute();

	    return $result;
 	}

 	public function search($id){
 
	    $sql = "SELECT * FROM candidates WHERE id LIKE '%{$id}%'";
	 	
	    // podgotvqme zaqvkata
	    $result = $this->connection->prepare($sql);
	    // izpylnqvame
	    $result->execute();

	    return $result;
 	}
}