<?php
session_start();
include("database.php");
if(isset($_POST['like']))
{
	  $sql3 = "UPDATE ideals SET _like= _like+1 WHERE id='".$_SESSION["iid"]."'";
		   $stmt = $conn->prepare($sql3);
		   $stmt->execute();  
	
}

else if(isset($_POST['dislike']))
{
	 $sql3 = "UPDATE ideals SET _dislike= _dislike+1 WHERE id='".$_SESSION["iid"]."'";
		   $stmt = $conn->prepare($sql3);
		   $stmt->execute();  
	
}
header("Location: ../Ideal_detail.php?id=".$_SESSION["iid"]);    

	?>