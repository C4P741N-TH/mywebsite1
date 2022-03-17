<html>
<body>
<?php
	$username = $_POST['forgot_pass'];

	$link = mysqli_connect('localhost','root','','mywebsite') OR DIE('BRUH');
	$sql = "SELECT * FROM login_info WHERE username='$username'";
	$result = mysqli_query($link,$sql);
	while($data = mysqli_fetch_array($result)){
		echo "<form method='post' action='forgotpasscheck.php?username={$data['username']}'>";

		echo "{$data['idenq']}?"."&nbsp;<input type='text' name='secret' required>"."&nbsp;"."<input type='submit' value='Verify'>"."</form>";
	}
	echo "<form><br><button formaction='forgot.html'>Back</button></form>";
	echo "<form><button formaction='index.php'>Back to index</button></form>";
?>
</body>
</html>