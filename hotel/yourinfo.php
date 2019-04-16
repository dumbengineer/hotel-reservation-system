<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Booking</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background-color: white">
	<center>
		<h1 style="color: white; padding-top: 20px">Your Booking Details</h1>
		<br><br><br>
		<div id="banner">
			<form action="yourinfo.php" method="post">
			<table>
				<tbody>
					<tr>
						<td>Name :</td>
						<td><?php echo $_POST['name']; ?></td>
					</tr>
					<tr>
						<td>e-mail :</td>
						<td><?php echo $_POST['email']; ?></td>
					</tr>
					<tr>
						<td>Phone number :</td>
						<td><?php echo $_POST['phone']; ?></td>
					</tr>
					<tr>
						<td>Destination :</td>
						<td><?php echo $_POST['destination']; ?></td>
					</tr>
					<tr>
						<td>Check-in date :</td>
						<td><?php echo $_POST['ci']; ?></td>
					</tr>
					<tr>
						<td>Check-out date :</td>
						<td><?php echo $_POST['co']; ?></td>
					</tr>
					<tr>
						<td>Number of rooms :</td>
						<td><?php echo $_POST['room']; ?></td>
					</tr>
					<tr>
						<td>Room type :</td>
						<td><?php echo $_POST['roomtype']; ?></td>
					</tr>
					<tr>
						<td>Number of adults :</td>
						<td><?php echo $_POST['adults']; ?></td>
					</tr>
					<tr>
						<td>Number of children :</td>
						<td><?php echo $_POST['child']; ?></td>
					</tr>
					<tr>
						<td><input class="roundCorner" type="submit" name="yes" value="BOOK"></td>
						<td><input class="roundCorner" type="submit" name="no" value="Edit"></td>
					</tr>
				</tbody>
			</table>
		</form>
		<?php
				if(isset($_POST['yes']))
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
					//$r=mysqli_query($a,$q);
					
					/*if(!$r)
						die("Databas access failed : ".mysqli_error($a));*/
					if (mysqli_query($a,$q))
					{
						//echo "data inserted";
						mysqli_query($a,"UPDATE room set status='Book' WHERE roomno=$roomno");
						include "redirect.php";
					}
					else
					{
						echo "data not inserted";
					}
				}
				elseif (isset($_POST['no'])) {
					header("Location:reg.php");
				}
			?>
		</div>
	</center>
</body>
</html>