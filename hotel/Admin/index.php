<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/admin_desk.jpg'); width: 100%; height: 100%; position: fixed;">
			<div id="header">
				<div id="logo">
					<h1><a href="index.php" style="text-decoration: none; color: red; padding: 30px;">Admin panel</a></h1>
				</div>
				<div id="nav">
					<ul>
						<li><a id="head_list" href="index.php">Home</a></li>
						<li><a id="head_list" href="room.php">Room Registration</a></li>
						<li><a id="head_list" href="rd.php">Room details</a></li>
						<li><a id="head_list" href="booking.php">Booking</a></li>
						<li><a id="head_list" href="addAdmin.php">Add admin</a></li>
					</ul>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br>
			<center>
				<h1 style="color: #fff">Admin Login</h1>
				<div id="banner">
					<form action="validation.php" method="post">
					<table>
						<tbody style="line-height: 3">
							<tr>
								<th>Username : </th>
								<td><input type="text" name="username" size="35" style="font-size: 14pt" placeholder="Enter your username" required="required"></td>
							</tr>
							<tr>
								<th>Password : </th>
								<td><input type="password" name="password" size="35" style="font-size: 14pt" placeholder="Enter your password" required="required"></td>
							</tr>
							<tr>
								<td><td><input type="submit" name="login" size="35" value="LOGIN" style="font-size: 14pt; border-radius: 30px; opacity: 0.8; height: 50px; width: 125px"></td></td>
							</tr>
						</tbody>
					</table>
				</form>
				</div>
			</center>
		</div>
	</div>
</body>
</html>