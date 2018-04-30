<?php 
session_start(); 
include("database.php");

if(isset($_POST['delete1']))
{

	
	header('Location: ../dashbord.php');
	
	
	
}
else if(isset($_POST['delete2']))
{
		
  	
		$stmt = $conn->prepare("DELETE  From ideals WHERE id='".$_SESSION["iid"]."'");
    $stmt->execute();
header('Location: ../dashbord.php');
}else{

   $stmt = $conn->prepare("SELECT * From ideals WHERE id='".$_SESSION["iid"]."'");
   $stmt->execute();
  
 while($test= $stmt->fetch(PDO::FETCH_ASSOC)) {
 
 
         $title= $test["title"];
         $pic =	$test["ideal_pic"];	
          		 
         
 
	 }
}







?>