<?php
session_start();

 try {
	 $dir = "uploads/";
	 
	 $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
	 $target2 = str_replace(' ', '',$dir . basename($_FILES["file1"]["name"]));
	 $target3 = str_replace(' ', '',$dir . basename($_FILES["file2"]["name"]));
	 $target4 = str_replace(' ', '',$dir . basename($_FILES["file3"]["name"]));
	 $target5 = str_replace(' ', '',$dir . basename($_FILES["file4"]["name"]));
	 
	 
	 $path1 = "";
	 $path2= "";
	 $path3 = "";
	 $path4 = "";
	 $path5 = "";
	 
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target1)) {
		 { $path1 = "includes/".$target1; }
}
	 
	 	 if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target2)) {
		 { $path2 = "includes/".$target2;}
}
	  	 if (move_uploaded_file($_FILES["file2"]["tmp_name"], $target3)) {
		 { $path3 = "includes/".$target3; }
}
	    	 if (move_uploaded_file($_FILES["file3"]["tmp_name"], $target4)) {
		 { $path4 = "includes/".$target4; }
}
	   	 if (move_uploaded_file($_FILES["file4"]["tmp_name"], $target5)) {
		 { $path5 = "includes/".$target5;}
}
	 
	 $ifpublic = isset($_POST['public']) ? "y" : "n";
	 $date= $_POST['date'];
	 $author= $_POST['author'];
	 $uid= $_SESSION['id'];
	 $title= $_POST['name'];
     $des= $_POST['des'];
	 include("database.php");
	 
	 
      $stmt = $conn->prepare("INSERT INTO ideals(ideal_pic,title,file1,file2,file3,file4,public,author,uid,des,date) VALUES( ?,?,?,?,?,?,?,?,?,?,?)" );
      $stmt->execute(array($path1,$title,$path2,$path3,$path4,$path5,$ifpublic,$author,$uid,$des,$date));
	     header("Location: ../dashbord.php");    

}catch (PDOException $e) {
      echo "There is an error";
      exit;
  }

  
  
?>