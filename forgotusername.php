<html>
<body>
<?php
	$email = $_POST['forgot_username'];

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "SELECT * FROM login_info WHERE email='$email'";
	$result = mysqli_query($link,$sql);
	while($data = mysqli_fetch_array($result)){
		echo "<form method='post' action='forgotusercheck.php?email={$data['email']}'>";

		echo "{$data['idenq']}?"."&nbsp;<input type='text' name='secret' required>"."&nbsp;"."<input type='submit' value='Verify'>"."</form>";
	}
	echo "<form><br><button formaction='forgot.html'>Back</button></form>";
	echo "<form><button formaction='index.php'>Back to index</button></form>";
?>
</body>
</html>