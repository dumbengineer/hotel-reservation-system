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
			<br><br><br><br><br><br><br>
			<center>
				<div id="banner">
					<form action="reg.php" method="post">
					<table>
						<tbody>
							<?php
								$sql="SELECT * FROM room WHERE status='Unbooked'";
								$run=mysqli_query($a,$sql);
								$row=mysqli_fetch_array($run);
								$roomno=$row['roomno'];

								$qry="SELECT * FROM room WHERE status='Unbooked'";
								$run=mysqli_query($a,$qry);
								$num=mysqli_num_rows($run);
								if($room<=$num)
								{
									?>
									<tr>
								<th>Status</th>
								<td><input type="text" name="status" size="25" value="Available" title="Status" disabled="disabled"></td>
							</tr>
							<tr>
								<th height="30px">Name</th>
								<th height="30px">Mobile number</th>
							</tr>
							<tr>
								<td><input type="text" name="name" size="25" style="font-size: 14pt" placeholder="Enter your name" required="required"></td>
								<td><input type="text" name="phone" size="25" style="font-size: 14pt" placeholder="Enter your mobile no."></td>
							</tr>
							<tr>
								<th colspan="2" height="30px">e-mail</th>
							</tr>
							<tr>
								<td colspan="2"><input type="email" name="email" size="45" style="font-size: 14pt" placeholder="Enter your email" required="required"></td>
							</tr>
							<tr>
								<th colspan="2" height="30px">Destination</th>
							</tr>
							<tr>
								<td colspan="2"><input type="text" name="destination" required="required" value="<?php echo $_GET['d1']?>" size="45" style="font-size: 14pt" placeholder="Enter Destination"></td>
							</tr>
							<tr>
								<th  height="30px">Check-in date</th>
								<th  height="30px">Check-out date</th>
							</tr>
							<tr>
								<td><input style="font-size: 14pt" type="date" name="ci" value="<?php echo $_GET['ci']?>"></td>
								<td><input style="font-size: 14pt" type="date" name="co" value="<?php echo $_GET['co']?>"></td>
							</tr>
							<tr>
								<th height="30px">Room type</th>
								<th height="30px">No. of rooms</th>
							</tr>
							<tr>
								<td>
									<select style="font-size: 14pt" name="roomtype" required="required">
										<option value="0">--Select type--</option>
										<option value="1">Single room</option>
										<option value="2">Double room</option>
										<option value="3">Air-conditioned room</option>
										<option value="4">Deluxe room</option>
									</select>
								</td>
								<td>
									<input style="font-size: 14pt" type="text" name="room" value="<?php echo $room?>">
								</td>
							</tr>
							<tr>
								<th colspan="2" height="30px">No. of members</th>
							</tr>
							<tr>
								<td>
									<input style="font-size: 14pt" type="text" name="adults" placeholder="Adults" required="required">
								</td>
								<td>
									<input style="font-size: 14pt" type="text" name="child" placeholder="Child" required="required">
								</td>
							</tr>
							<tr>
								<td colspan="2"><input class="roundCorner" type="submit" name="submit" value="BOOK"></td>
							</tr>
								<?php
								}
								else
								{
									?>
									<tr>
								<th>Status</th>
								<td><input type="text" name="status" size="25" style="font-size: 25pt" value="Not Available" title="Status" disabled="disabled"></td>
							</tr>
							<tr>
								<td colspan="2" style="font-size: 15pt"><a href="index.php">GO BACK TO HOME</a></td>
							</tr>
							</tbody><?php
								}
								?>
						</tbody>
					</table>
				</form>
				<?php
				if(isset($_POST['submit']))
				{
					$name=mysqli_real_escape_string($a,$_POST['name']);
					$phone=mysqli_real_escape_string($a,$_POST['phone']);
					$email=mysqli_real_escape_string($a,$_POST['email']);
					$destination=mysqli_real_escape_string($a,$_POST['destination']);
					$cindate=mysqli_real_escape_string($a,$_POST['ci']);
					$coutdate=mysqli_real_escape_string($a,$_POST['co']);
					$roomtype=mysqli_real_escape_string($a,$_POST['roomtype']);
					$room=mysqli_real_escape_string($a,$_POST['room']);
					$adults=mysqli_real_escape_string($a,$_POST['adults']);
					$child=mysqli_real_escape_string($a,$_POST['child']);
					$q="INSERT INTO booking(name,phone,email,destination,cindate,coutdate,roomtype,room,adults,child) VALUES('.$name.','.$phone.','.$email.','.$destination.','.$cindate.','.$coutdate.','.$roomtype.','.$room.','.$adults.','.$child.')";
					$s="INSERT INTO signup(name,phone,email) VALUES('.$name.','.$phone.','.$email.')";
					$r=mysqli_query($a,$s);
					
					/*if(!$r)
						die("Databas access failed : ".mysqli_error($a));*/
					if (mysqli_query($a,$q))
					{
						//echo "data inserted";
						mysqli_query($a,"UPDATE room set status='Booked' WHERE roomno=$roomno");
						include "redirect.php";
					}
					else
					{
						echo "data not inserted";
					}
				}
			?>
				</div>
			</center>
		</div>
	</div>
</body>
</html>