<?php
    $username = $_GET['username'];
	$password = $_POST['newpass'];
	$conpass = md5($password);
	
	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "UPDATE login_info SET password='$conpass' WHERE username='$username'";
	$result = mysqli_query($link,$sql);
	if(!$result){
		echo "Failed to change password.";
		echo "<form><br><br><button formaction='renewpass.html'>Back</button></form>";
		echo "<form><button formaction='index.php'>Back to index</button></form>";
	}else{

		echo "Password changed.<br><br>";
		echo "<form><button formaction='index.php'>Back to index</button></form>";
	}
?>