<?php
 
class Connection {

    protected $host = "localhost";
    protected $dbname = "test";
    protected $user = "root";
    protected $pass = "";
    protected $DBH;

    function __construct() {

        try {

            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

public function getConnection()
{
    return $this->DBH;
}
    public function closeConnection() {

        $this->DBH = null;
    }
} 
?>