<?php
class Database
{
     
    private $host = "sql105.epizy.com";
    private $db_name = "epiz_25882415_Admin";
    private $username = "epiz_25882415";
    private $password = "jZVeN8uFEfQt6q";
    public $conn;
     
    public function dbConnection()
 {
     
     $this->conn = null;    
        try
  {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>