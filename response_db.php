<?php

     
    $host = "self-important-real.000webhostapp.com";
    $db_name = "id13794437_db1";
    $username = "id13794437_asomwurk";
    $password = "aed!ilhaiMushkil1";
        
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