<?php session_start();
include("header.php");
include("nav.php");
include("includes/see_single_detail.php");
?>
</ul>
<h1>Idea detail</h1>
<a href="dashbord.php">Go back</a>
<br><br>
<form action="includes/editidea.php" method="post" enctype="multipart/form-data">
<div class="global_div">
<div class="col"><img <?php echo "src=".$path1 ?> alt="img/generic-image-placeholder.png"><br><br><input type="file"   name="image" accept="image/x-png,image/gif,image/jpeg" size="3MB"/> <br><p>like:&nbsp&nbsp&nbsp <?php echo $like;?> like it</p><br><p>Dislike:&nbsp&nbsp&nbsp <?php echo $dislike;?> dont like it</p>




</div>
<div class="col"> Idea Title(Name)<br><br> Date Created <br><br> Author <br><br> Description <br><br>





<?php
     if($path2)
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file1</a>";		
		
		
	
?><input type="file" size="3MB" name="file1"><br><br>  <?php
     if($path3)
	
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file2</a>";		
		
		
	
?><input type="file" size="3MB" name="file2"><br><br><?php
     
	if($path4)
	
    echo "<a href= 'http://wang59.dev.fast.sheridanc.on.ca/idea%20manager/".$path2."'>file3</a>";		
		
		
	
?> <input type="file" name="file3" size="3MB">




<br>

</div>
<br>


<div class="col"><input type="text" name="name" value=<?php echo $title ?> ><br><br><input type="date" value="<?php echo date('Y-m-d',strtotime($date) )?>" name="date"><br><br><input type="text" value=<?php echo $author;?> name="author"><br><br><input type="text" value=<?php echo $des?> name="des"><br><br>
<br><input id="checkBox" type="checkbox" <?php if($ifpublic=="y")  {echo("checked");}?>  >Is this ideal public?  <br><br><br><br>  <input type="submit" value="update" name="submit"  class="save">
</div>

<br>

<input type="submit" name="submit"  value="delete" class="deleteButton">
</div>
</form>
</body>
<?php 
include("foot.php");
?>