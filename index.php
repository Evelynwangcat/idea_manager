<?php
session_start(); 
include("header.php");
require("includes/showpic.php");
?>
<h1 class="homepage">Homepage</h1>
<?php 
include("nav.php");
?>
</ul>
 <div class='global_div'> 
<?php 
   
     
     while($test= $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo   "<div class='image image2'><a href='Ideal_detail.php?id=".$test['id']."'><img class='idea_title idea_title2' src=".$test['ideal_pic']." >";
        echo   "<p class='idea_discription'>".$test["title"]. " </p></a></div> " ;
      
 
	 }
	 ?>
</div>


<?php
include("foot.php");?>