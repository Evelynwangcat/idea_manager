<?php 
session_start();
include("database.php");

try{
$stmt1 = $conn->prepare("SELECT * From users_idea where name=? AND pass=? ;");
$stmt1->bindValue(1,  $_POST["name"], PDO::PARAM_STR);
$stmt1->bindValue(2,  $_POST["pass"], PDO::PARAM_STR);
$stmt1->execute();
if($stmt1->rowCount()>0)
{

   $_SESSION["authenticated"] = "true";

  while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {

      $_SESSION["id"] = $row["id"];

   header("Location: ../dashbord.php"); 
    exit;
  }


}

else{

   

   $_SESSION["authenticated"] = "false";
   header("Location: ../login.php");    


}



}
catch (PDOException $e) {
    echo "There is an erro when log in.";
    exit;
  }

?>