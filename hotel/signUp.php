<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up to register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/signTheme.png'); object-fit: fill; width: 1200px; height: 800px; background-repeat: no-repeat;">
			<div id="header">
				<div id="logo">
					<h1>My Project</h1>
				</div>
				<div id="nav">
					<ul>
						<li><a id="head_list" href="index.php">Home</a></li>
						<li><a id="head_list" href="connect.html">Connect Us</a></li>
						<li><a id="head_list" href="book.php">Reservation</a></li>
						<li><a id="head_list" href="#">Our hotel</a></li>
						<li><a id="head_list" href="help.html">Help</a></li>
					</ul>
				</div>
				<center>
					<form action="signUp.php" method="post">
				<table id="reg_table">
					<tbody>
						<tr>
							<th>ID No. : </th>
							<td><input class="roundCorner" type="text" name="id" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
						<tr>
							<th>Name : </th>
							<td><input class="roundCorner" type="text" name="name" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>Email : </th>
							<td><input class="roundCorner" type="email" name="email" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>Phone number: </th>
							<td><input class="roundCorner" type="text" name="phone" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>Address : </th>
							<td><input class="roundCorner" type="text" name="address" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>State : </th>
							<td><input class="roundCorner" type="text" name="state" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>City : </th>
							<td><input class="roundCorner" type="text" name="city" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>District : </th>
							<td><input class="roundCorner" type="text" name="district" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<th>Zip code : </th>
							<td><input class="roundCorner" type="number" name="zip" size="45" style="height: 10px; width: 300px" class=""></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="submit" value="Register" style="font-size: 15pt; width: 60%"></td>
						</tr>
						<td colspan="2" align="center">Already registerd? <a href="#">Login</a></td>
					</tbody>
				</table>
			</form>
			</center>
			<?php
				if(isset($_POST['submit']))
				{
					$name=$_POST['name'];
					$id=$_POST['id'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$address=$_POST['address'];
					$state=$_POST['state'];
					$city=$_POST['city'];
					$district=$_POST['district'];
					$zip=$_POST['zip'];
					if (mysqli_query($a,"INSERT INTO signup(name,id,email,phone,address,state,city,district,zip) VALUES('$name','$id','$email','$phone','$address','$state','$city','$district','$zip')"))
					{
						echo "data inserted";
					}
					else
					{
						echo "data not inserted";
					}
				}
			?>
			</div>
		</div>
	</div>
</body>
</html>