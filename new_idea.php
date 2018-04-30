<?php 
session_start();
include("header.php");
include("nav.php");
?>

    

</ul>
<h1>New Idea&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dashbord.php" style="font-size: 16px;">Go back>></a></h1>
<br><br>

<div class="global_div">
<div class="col"><img src="img/generic-image-placeholder.png"><br><br>
<form action="includes/insertidea.php" method="post" enctype="multipart/form-data"><input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" required />
</div>
<div class="col"> Idea Title(Name)<br><br> Date Created <br><br> Author <br><br> Description <br><br><input type="file" name="file1"><br><br>  <input type="file" name="file2"><br><br> <input type="file" name="file3"><br><br> <input type="file" name="file4">
</div>
<div class="col"><input type="text" placeholder="enter name" name="name" required><br><br><input type="date" placeholder="Date Created" name="date" required><br><br><input type="text" placeholder="Author" name="author" required><br><br><input type="text" placeholder="Description" name="des" required><br><br>
<br><input id="checkBox" type="checkbox" name="public"> Is this ideal public?  <br><br><br><br>  <input type="submit" class="add_detail" name="add">
</div>


<br>

</form>
</div>

<?php 
include("foot.php");
?>