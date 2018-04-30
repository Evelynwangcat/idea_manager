<?php
session_start();
include("includes/database.php");
include("includes/show_user_ideal.php");
include("header.php");
include("nav.php");
?>
<li><a href="new_idea.php">Add New Idea  </a></li>
<div class="global_div">

</ul>

<p class="info">click the ideas below</p>

  <?php 
  
  echo "<div class='global_div'> ";
  $stmt1->execute();
    while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        echo   "
        <div class='image image2'>
        <a href='your_idea_detail.php?id=".$test["id"]."'>
        <img class='idea_title idea_title2' src=".$test["ideal_pic"]. ">";
        echo   "<p class='idea_discription'>".$test["title"]. " </p>
        </a>
        </div> 
        " ;
    
    }
   echo "</div>";




	

?>

</div></body> 
<?php 
include("foot.php");
?>