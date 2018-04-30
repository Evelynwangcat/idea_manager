

<?php
echo "<ul id='nav'>";

echo "<li><a href='index.php'>All Ideas</a></li>";

if ($_SESSION["authenticated"] == "true")
	{echo " <li><a class='active' href='dashbord.php'>My Ideas</a></li>
			<ul id='subnav'><li><a href='includes/kill_session_logout.php'>Logout</a></li></ul>
			"
			;}
else{
	echo "
	<ul  id='subnav'>
		<li><a class='active' href='register.php'>Register</a></li>
		  <li><a href='login.php'>Login</a></li>
	</ul>
	";}

?>


