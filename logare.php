<?php
	
	//session_start();
	if(isset($_POST['logare'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$username=htmlspecialchars((string)$username);
		$password=htmlspecialchars((string)$password);

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logare</title>
</head>
<body>
	<h1>Logare</h1>
	<h3><?php echo "Hi " . $username . " your password is " . $password; ?></h3>
</body>
</html>