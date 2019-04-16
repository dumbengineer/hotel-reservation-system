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
	<title>Total Bookings</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/booking.png'); width: 100%; height: 100%; position: fixed;">
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
			<h1 style="color: blue; text-align: center;">Bookings</h1>
			<center>
				<div id="banner" style="width: 85%">
					<table>
						<tbody>
							<tr>
								<th width="10%" height="50px">Name</th>
								<th width="10%" height="50px">e-mail</th>
								<th width="10%" height="50px">Phone</th>
								<th width="10%" height="50px">Destination</th>
								<th width="10%" height="50px">Check-in date</th>
								<th width="10%" height="50px">Check-out date</th>
								<th width="10%" height="50px">Room type</th>
								<th width="10%" height="50px">No. of rooms</th>
								<th width="10%" height="50px">No. of adults</th>
								<th width="10%" height="50px">No. of child</th>
							</tr>
							<?php
								$qry="SELECT * FROM booking";
								$result=mysqli_query($a,$qry);
								while ($fetched=mysqli_fetch_array($result)) {
									echo "<tr>";
									echo "<td>".$fetched['name']."</td>";
									echo "<td>".$fetched['email']."</td>";
									echo "<td>".$fetched['phone']."</td>";
									echo "<td>".$fetched['destination']."</td>";
									echo "<td>".$fetched['cindate']."</td>";
									echo "<td>".$fetched['coutdate']."</td>";
									echo "<td>".$fetched['roomtype']."</td>";
									echo "<td>".$fetched['room']."</td>";
									echo "<td>".$fetched['adults']."</td>";
									echo "<td>".$fetched['child']."</td>";
									echo "</tr>";
						}
							?>
						</tbody>
					</table>
				</div>
			</center>
		</div>
	</div>
</body>
</html>