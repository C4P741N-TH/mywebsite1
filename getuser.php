<html>
<body>
<?php
	$email = $_GET['email'];

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('Cannot connect to database.');
	$sql = "SELECT * FROM login_info WHERE email='$email'";
	$result = mysqli_query($link,$sql);
	$data =  mysqli_fetch_array($result);

	echo "<form name='renewpass' method='post' action='renewpassaction.php?email={$data['email']}'>";

	echo "Your username is "."{$data['username']}";

	echo "<br><br><button formaction='login.html'>Back</button><br><br>";
	echo "<button formaction='index.php'>Back to index</button>";
?>
</form>
</body>
</html>