<html>
<body>
<?php
	$username = $_GET['username'];

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('Cannot connect to database.');
	$sql = "SELECT * FROM login_info WHERE username='$username'";
	$result = mysqli_query($link,$sql);
	$data =  mysqli_fetch_array($result);

	echo "<form name='renewpass' method='post' action='renewpassaction.php?username={$data['username']}'>";

	echo "Please enter your new password: ";
	echo "<input type='password' name='newpass' required> ";
	echo "<input type='submit' value='Confirm'><br><br></form>";

	echo "<form><button formaction='login.html'>Back</button><br><br>";
	echo "<button formaction='index.php'>Back to index</button></form>";
?>

</body>
</html>