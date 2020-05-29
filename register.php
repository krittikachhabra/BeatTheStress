<?php 

	if (isset($_POST["Token"])) {
		
		   $token=$_POST["Token"];


$host = "sql105.epizy.com";
    $db_name = "epiz_25882415_fcm";
    $username = "epiz_25882415";
    $password = "jZVeN8uFEfQt6q";
		  
    try
  {
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
        }
            $stmt = $this->conn->prepare("INSERT INTO users (Token) VALUES (:token) ON DUPLICATE KEY UPDATE Token = :token");
            $stmt->bindparam(":token",$token);
            $stmt->execute();

	}

 ?>