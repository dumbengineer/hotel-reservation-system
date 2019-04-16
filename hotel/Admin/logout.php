<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
</head>
<body style="background-color: black; text-align: center; height: 100%;">
	<div>
		<h2 style="color: white">You are successfully logged out.</h2>
		<a href="index.php" style="color: white; text-decoration: none;">LOG IN again</a>
	</div>
</body>
</html>