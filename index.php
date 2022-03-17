<html>
<body>
<form>
<?php
	session_start();
	if(isset($_SESSION['name']))
	{
		echo "Welcome ".$_SESSION['name']."!"."<br><br>";
		echo "<form><button formaction='logoutaction.php'>Log out</button></form>";
	}
	else{
		echo "Welcome to my website!<br><br>";
		echo "<button formaction='login.html'>Log in</button>&nbsp;";
		echo "<button formaction='register.html'>Sign up</button>";
	}
?>
</form>
</body>
</html>