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
	<title>Room Details</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/rds.jpg'); width: 100%; height: 100%; position: fixed;">
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
			<h1 style="color: blue; text-align: center;">Welcome <?php echo $_SESSION['username']; ?></h1>
			<center>
				<div id="banner" style="width: 60%">
					<table width="80%">
						<tbody>
							<tr>
								<th width="25%" height="50px">Room Number</th>
								<th width="25%" height="50px">Room Type</th>
								<th width="25%" height="50px">Price</th>
								<th width="25%" height="50px">Status</th>
								<th width="25%" height="50px">Option</th>
							</tr>
							<?php
								$qry="SELECT * FROM room";
								$result=mysqli_query($a,$qry);
								while ($rd=mysqli_fetch_assoc($result)) {
									$roomno=$rd['roomno'];
									echo "<tr>";
									echo "<td>".$rd['roomno']."</td>";
									echo "<td>".$rd['roomtype']."</td>";
									echo "<td>".$rd['price']."</td>";
									echo "<td>".$rd['status']."</td>";
									echo "<td><a href='checkout.php?roomno=$roomno'>Check Out</a></td>";
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