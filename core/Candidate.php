<?php 

class Candidate
{
	private $connection;
	
	public function __construct($db) {
        $this->connection = $db;
    }

    public function getAll() {

    	$sql = "SELECT * FROM candidates";
	    
	    $result = $this->connection->query($sql);
	 
	    return $result;
    }

    public function review($id){
 
	    $sql = "SELECT * FROM candidates WHERE id = {$id}";
	 	
	    $result = $this->connection->query($sql);

	    return $result;
 	}

 	public function search($id){
 
	    $sql = "SELECT * FROM candidates WHERE id LIKE '%{$id}%'";
	 	
	    $result = $this->connection->query($sql);

	    return $result;
 	}
}