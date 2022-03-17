<html>
<body>
<?php
	session_start();
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];
	$conpass = md5($password);

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "SELECT * FROM login_info WHERE username='$username' AND password='$conpass'";
	$result = mysqli_query($link,$sql);
	$N=mysqli_num_rows($result);
	if($N == 1)
	{
		$data = mysqli_fetch_array($result);
		$_SESSION['id'] = $data['id'];
		$_SESSION['name'] = $data['name'];
		header('Location:index.php');
	}else
	{
		echo "Username or Password incorrect.";
		echo "<form><br><br><button formaction='login.html'>Back</button></form><br>";
		echo "<form><button formaction='index.php'>Back to index</button></form>";
	}
?>
</body>
</html>