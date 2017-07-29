<?php 

class Database
{
	// database information
    private $host = "localhost";
    private $dbName = "rest_db";
    private $username = "root";
    private $password = "";
 
    // connection method
    public function make(){
 
        try {

            return new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password);

        } catch(PDOException $exception) {

            echo "Connection error: " . $exception->getMessage();
            
        }
 
    }
}
