 <?php

     
    $host = "sql105.epizy.com";
    $db_name = "epiz_25882415_db1";
    $username = "epiz_25882415";
    $password = "jZVeN8uFEfQt6q";
        
        try
  {
            $con = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
  }
?>