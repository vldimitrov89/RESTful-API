<?php 

class Candidate
{

    public function getAll() {

    	$sql = "SELECT * FROM candidates";

	    $db = new Database();
	   	$connection = $db->make();

	    $result = $connection->query($sql);
	 
	    return $result;
    }

    public function review($id){
 
	    $sql = "SELECT * FROM candidates WHERE id = {$id}";
	 	
	 	$db = new Database();
	   	$connection = $db->make();

	    $result = $connection->query($sql);

	    return $result;
 	}

 	public function search($id){
 
	    $sql = "SELECT * FROM candidates WHERE id LIKE '%{$id}%'";
	 	
	 	$db = new Database();
	   	$connection = $db->make();

	    $result = $connection->query($sql);

	    return $result;
 	}
}