<html>
<body>
<?php
	$username = $_GET['username'];
	$a = $_POST['secret'];

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "SELECT * FROM login_info WHERE username='$username' AND idena='$a'";
	$result = mysqli_query($link,$sql);
	if(!$data = mysqli_fetch_array($result)){
		echo "Incorrect secret answer.<br>";

		echo "<form><br><br><button formaction='forgot.html'>Back</button></form>";
		echo "<form><button formaction='index.php'>Back to index</button></form>";
	}else{
		header("Location:renewpass.php?username={$data['username']}");
	}
?>
</body>
</html>