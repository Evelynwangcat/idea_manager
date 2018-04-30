<?php 
include("includes/see_single_detail.php");
include("header.php");
?>

<h1>Homepage</h1>    
<?php 
include("nav.php");
?>
<div class="global_div">
<a href="index.php">Go back</a><br><br>
<div class="container">
    <div id="floated"> <img <?php echo "src=".$path1 ?> ><br>
    <br>
	<br>
	<br>
	<br>
    <br>
	<br>
	<br>
</div>
    <label>Ideal Title:<?php echo $title;?></label>
	<br>
	<br>
    <label>Date Created:<?php echo $date;?></label>
	<br>
	<br>
	<label>Author:<?php echo $author;?></label>
	<br>
	<br>
	<label>Description:<?php echo $des;?></label>
	<br>	
	<br>	
	<?php
     if($path2)
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file1</a>";		
		
		
	
?>    <br> <?php
     if($path3)
	
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file2</a>";		
		
		
	
?>
<br><?php
     
	if($path4)
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file3</a>";		
		
		
	
?>   
	<br>
	<br>
	<br>	
	<br>
	<br>
</div>
<div class="container1">
<div id="floated1"> <form action="includes/like_dislike.php" method="post"> <?php echo $like;?> like  <input type="submit" name="like" value="like" > <?php echo $dislike;?> dislike<input type="submit" name="dislike" value="dislike" ></form> </div> 
</div>
</div>
<?php 
include("foot.php");
?>