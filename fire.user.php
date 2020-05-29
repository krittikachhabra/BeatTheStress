<?php

require_once 'firebase_db.php';

class FUSER
{ 

 private $conn;
 
 public function __construct()
 {
  $firebase_db = new firebase_db();
  $db = $firebase_db->dbConnection();
  $this->conn = $db;
    }
 
 public function runQuery($sql)
 {
  $stmt = $this->conn->prepare($sql);
  return $stmt;
 }
}
?>