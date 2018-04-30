<?php 
session_start();
include("database.php");
try{
    $stmt1 = $conn->prepare("SELECT * From ideals where uid=?  ");
    $stmt1->bindValue(1,  $_SESSION["id"], PDO::PARAM_STR);
	$stmt1->execute();
   }
catch (PDOException $e) {
    echo "There is an erro when log in.";
    exit;}


?>