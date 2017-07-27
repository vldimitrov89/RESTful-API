<?php 

class Database
{
	// informaciq za database-a
    private $host = "localhost";
    private $dbName = "rest_db";
    private $username = "root";
    private $password = "";
    public $connection;
 
    // metod za connection
    public function getConnection(){
 
        $this->connection = null;
 
        try {

            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password);

        } catch(PDOException $exception) {

            echo "Connection error: " . $exception->getMessage();
            
        }
 
        return $this->connection;
    }
}
