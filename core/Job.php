<?php

require 'core/Database.php';

class Job
{
	
    public function getAll() {

    	$sql = "SELECT * FROM jobs";
	   	
	   	$db = new Database();
	   	$connection = $db->make();
	    $result = $connection->query($sql);
	 
	    return $result;
    }

    public function getOne($id){
 
	    $sql = "SELECT * FROM jobs WHERE id = {$id}";
	 	//echo $sql;
	 	$db = new Database();
	 	$connection = $db->make();
	    $result = $connection->query($sql);

	    //var_dump($result);
	    return $result;
 	}
}