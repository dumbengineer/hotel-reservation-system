<?php
include("connection.php");
$room=$_GET['room'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book your room</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/book_bg.jpg'); width: 100%; height: 800px; position: fixed;">
			<div id="header">
				<div id="logo">
					<h1><a href="index.php" style="text-decoration: none; color: red; padding: 70px;">HRS</a></h1>
				</div>
				<div id="nav">
					<ul>
						<li><a id="head_list" href="index.php">Home</a></li>
						<li><a id="head_list" href="connect.html">Connect Us</a></li>
						<li><a id="head_list" href="book.php">Reservation</a></li>
						<li><a id="head_list" href="rates.html">Rates</a></li>
						<li><a id="head_list" href="help.html">Help</a></li>
					</ul>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center>
				<div id="banner" style="width: 80%">
		<form action="reg.php" method="get">
		<center><table>
			<tr>
				<th  height="50px">Destination</th>
				<th  height="50px">Check-in date</th>
				<th  height="50px">Check-out date</th>
				<th  height="50px">No. of rooms</th>
				<td rowspan="2"><input class="roundCorner" type="submit" name="submit" value="CHECK AVAILABILITY"></td>
			</tr>
			<tr>
				<td><input class="roundCorner" type="text" name="d1" placeholder="Enter Destination" required="required"></td>
				<td><input class="roundCorner" type="date" name="ci" required="required"></td>
				<td><input class="roundCorner" type="date" name="co" required="required"></td>
				<td>
					<div class="roundCorner">
					<select id="custom_select" name="room" required="required">
						<option value="0">No. of rooms</option>						
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				</td>
			</tr>
		</table></center>
		</form>
	</div>
			</center>
		</div>
	</div>
</body>
</html>