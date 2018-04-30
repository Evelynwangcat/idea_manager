<?php
session_start();
include("database.php");

if( isset($_POST["submit"]))
{   
	
	if( $_POST["submit"]=="update")
	{ $iid=$_SESSION["iid"]; 
      
	  try{
	  
	  $dir = "uploads/";
	 
	 $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
	 $target2 = str_replace(' ', '',$dir . basename($_FILES["file1"]["name"]));
	 $target3 = str_replace(' ', '',$dir . basename($_FILES["file2"]["name"]));
	 $target4 = str_replace(' ', '',$dir . basename($_FILES["file3"]["name"]));
	
	 
	 
	 $path1 = "";
	 $path2= "";
	 $path3 = "";
	 $path4 = "";
	 $path5 = "";
	 
         if (basename($_FILES["image"]["name"])) {
		    move_uploaded_file($_FILES["image"]["tmp_name"], $target1);
		   $path1 = "includes/".$target1;  
           $sql1 = "UPDATE ideals SET ideal_pic='".$path1."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql1);
		   $stmt->execute(); 			 
          }
	 
	 	
         if (basename($_FILES["file1"]["name"])) {
		   move_uploaded_file($_FILES["file1"]["tmp_name"], $target2);
		   $path2 = "includes/".$target2;  
           $sql2 = "UPDATE ideals SET file1='".$path2."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql2);
		   $stmt->execute();}
		   
		   
		   
		   
         if (basename($_FILES["file2"]["name"])) {
		   move_uploaded_file($_FILES["file2"]["tmp_name"], $target3);
		   $path3 = "includes/".$target3;  
           $sql3 = "UPDATE ideals SET file2='".$path3."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql3);
		   $stmt->execute();  }
		   
		   
		   
         if (basename($_FILES["file3"]["name"])) {
		   move_uploaded_file($_FILES["file3"]["tmp_name"], $target4);
		   $path4 = "includes/".$target4;  
           $sql4 = "UPDATE ideals SET file3='".$path4."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql4);
		   $stmt->execute(); 			 }
		   
		   
		   
  
       
     
	   
	   if(isset($_POST['name']))
	  {$e=$_POST['name'];}
	  if($e){$sql5= "UPDATE ideals SET title='".$e."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql5);
		   $stmt->execute();}
	  
	   if(isset($_POST['public']))
	  {$f=$_POST['public'];}
	  if($f){$sql6= "UPDATE ideals SET public='".$f."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
	   if(isset($_POST['author']))
	  {$g=$_POST['author'];}
	  if($g){$sql7= "UPDATE ideals SET author='".$g."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql7);
		   $stmt->execute();}
	   if(isset($_SESSION['id']))
	  {$h=$_SESSION['id'];}
	  if($h){$sql8= "UPDATE ideals SET uid='".$h."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql8);
		   $stmt->execute();}
	   if(isset($_POST['des']))
	  {$i=$_POST['des'];}
	  if($i){$sql9= "UPDATE ideals SET des='".$i."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql9);
		   $stmt->execute();}
	   if(isset($_POST['date']))
	  {$j=$_POST['date'];}
	  if($j){$sql10= "UPDATE ideals SET date='".$j."' WHERE id='".$iid."'";
		   $stmt = $conn->prepare($sql10);
		   $stmt->execute();}
		   
		   
		   echo "Update already! <a href='../dashbord.php'>back</a>";
		   
		   
       }catch(PDOException $e){
		   
	   }
	 
	 
      
	  
	 
	  
	 
   
    }
	else if($_POST["submit"]=="delete"){
		
	header('Location: ../confirm_delete.php');
		
		
		
		
		
		
		
		
	} 
	
	 
	
	
	
	
}






?>