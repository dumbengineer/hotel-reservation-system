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
	<title>Room registration</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/room_admin.jpg'); width: 100%; height: 100%; position: fixed;">
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
			<a style="color: red; float: right; margin-right: 100px; font-size: 18pt; text-decoration: none;" href="logout.php">LOG OUT</a>
			<br><br><br><br><br><br><br>
			<center>
				<div id="banner">
					<form action="room.php" method="post">
					<table>
						<tbody style="line-height: 3">
							<tr>
								<th>Room no.</th>
								<td><input type="text" name="roomno" size="35" style="font-size: 14pt" placeholder="Enter Room number"></td>
							</tr>
							<tr>
								<th>Room Type</th>
								<td><input type="text" name="roomtype" size="35" style="font-size: 14pt" placeholder="Enter Room type"></td>
							</tr>
							<tr>
								<th>Room Price</th>
								<td><input type="text" name="price" size="35" style="font-size: 14pt" placeholder="Enter Room price"></td>
							</tr>
							<tr>
								<td></td>
								<th><input type="submit" name="submit" style="font-size: 14pt" value="Submit"></th>
							</tr>
						</tbody>
					</table>
				</form>
				<?php 
				if (isset($_POST['submit'])) 
				{
					$roomno=$_POST['roomno'];
					$roomtype=$_POST['roomtype'];
					$price=$_POST['price'];
					if (mysqli_query($a,"INSERT INTO room(roomno,roomtype,price) VALUES('$roomno','$roomtype','$price')")) 
					{
						echo "<h3>DATA UPDATED</h3>";
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