<?php
session_start();
include("connection.php");

if (!isset($_SESSION['username'])) {
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Admin</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/add.jxr'); width: 100%; height: 100%; position: fixed;">
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
			<br><br><br><br><br><br>
			<a style="color: red; float: right; margin-right: 100px; font-size: 18pt; text-decoration: none;" href="logout.php">LOG OUT</a><br><br><br><br><br><br><br>
			<center>
				<div id="banner">
					<form action="addAdmin.php" method="post">
					<table>
						<tbody style="line-height: 3">
							<tr>
								<th>Admin username</th>
								<td><input type="text" name="username" size="35" style="font-size: 14pt" placeholder="Enter Admin Username" required="required"></td>
							</tr>
							<tr>
								<th>Admin password</th>
								<td><input type="password" name="password" size="35" style="font-size: 14pt" placeholder="Enter Admin Password" required="required"></td>
							</tr>
								<th><input type="submit" name="submit" style="font-size: 14pt; border-radius: 30px; opacity: 0.8; height: 50px; width: 125px;" value="Add admin"></th>
							</tr>
						</tbody>
					</table>
				</form>
				<?php 
				if (isset($_POST['submit'])) 
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					if (mysqli_query($a,"INSERT INTO adminlogin(username,password) VALUES('$username','$password')")) 
					{
						echo "<h3>ADMIN UPDATED</h3>";
					}
					else
					{
						echo "UNABLE TO PROCESS...";
					}
				}
				 ?>
				</div>
			</center>
		</div>
	</div>
</body>
</html>