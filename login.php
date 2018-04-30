<?php 
session_start();
include("header.php");
include("nav.php");
?>

 <div class='global_div global_div2'> 

<form method="post" action="includes/authenticate.php"  >
<label>username</label>
<input type="text" name="name" class="login_form login_form2" ><br><br>

<label>password</label>
<input type="text" name="pass"  class="login_form login_form2" >
<br><br>
<?php 
if (isset($_SESSION['authenticated']))
    
	{
        if($_SESSION['authenticated']=="false")
        
    {echo "password or username wrong";}

}
?>
<input type="submit" class="login_form login_form3">

</form>
</div> 

<?php 
include("foot.php");
session_destroy();
?>