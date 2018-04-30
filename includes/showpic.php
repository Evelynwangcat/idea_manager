<?php 
include("database.php");
$stmt = $conn->prepare("SELECT * From ideals WHERE public ='y';");
$stmt->execute();

?>


 



 

 


