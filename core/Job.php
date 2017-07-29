<?php 

class Job
{
	private $connection;
	
	public function __construct($db) {
        $this->connection = $db;
    }

    public function getAll() {

    	$sql = "SELECT * FROM jobs";
	   
	    $result = $this->connection->query($sql);
	 
	    return $result;
    }

    public function getOne($id){
 
	    $sql = "SELECT * FROM jobs WHERE id = {$id}";
	 	
	    $result = $this->connection->query($sql);

	    return $result;
 	}
}