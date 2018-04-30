<?php
include("header.php");
include("nav.php");
?>

<div class='global_div global_div2'> 
<form method="post" action="includes/register_user.php" >
<label>email address</label>
<input type="email" name="_email" class="login_form login_form2" required><br><br>

<label>username</label>
<input type="text" name="_user"  class="login_form login_form2" required>
<br><br>
<label>password</label>
<input type="password" name="_pass"  class="login_form login_form2" required>
<br><br>
<input type="submit" class="login_form login_form3" >

</form>
</div>
  </body>
<?php 
include("foot.php");
?>