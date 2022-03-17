<html>
<body>
<form>
<?php

	$username = $_POST['register_username'];
	$password = $_POST['register_password'];
	$name = $_POST['register_name'];
	$phone = $_POST['register_phone'];
	$email = $_POST['register_email'];
	$idenq = $_POST['set_q'];
	$idena = $_POST['set_a'];

	$conpass = md5($password);

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "INSERT INTO login_info VALUES('','$username','$conpass','$name','$phone','$email','$idenq','$idena')";
	$result = mysqli_query($link,$sql);
	if(!$result){
		echo "Failed!";
		echo "<button formaction='index.php'>Back to index</button>";
	}
	else{
		echo "Registration completed!";
		echo "<br><br><button formaction='login.html'>Log in</button>";
	}
?>

<br><br><button formaction="index.php">Back to index</button>
</form>
</body>
</html>