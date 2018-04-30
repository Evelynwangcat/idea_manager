<?php  
session_start();
include("database.php");

try {
$stmt1 = $conn->prepare("SELECT * From ideals where id= ?  ");
  $stmt1->bindValue(1,  $_GET["id"], PDO::PARAM_STR);
  $stmt1->execute();
     $path1 = "";
	 $path2= "";
	 $path3 = "";
	 $path4 = "";
	 $path5 = "";
     $ifpublic="";
	  $date="";
	  $author="";
	  $uid="";
	  $title="";
	  $des="";
  
    while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
     $like=$test["_like"];
	 $dislike=$test["_dislike"];
	$path1=$test["ideal_pic"];
	$path2= $test["file1"];
	 $path3 = $test["file2"];
	 $path4 = $test["file3"];
	 $path5 = $test["file4"];
     $ifpublic=$test["public"];
	  $date=$test["date"];
	  $author=$test["author"];
	  $uid=$test["uid"];
	  $title=$test["title"];
	  $des=$test["des"];
    
    }
   echo "</div>";
    
	 $_SESSION["iid"]= $_GET["id"];



}catch (PDOException $e) {
    echo "There is an erro when register";
    exit;
  }
?>