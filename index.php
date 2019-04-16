<!DOCTYPE html>
<html>
<head>
	<title>Home(Hotel management)</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="images/icon" href="images/home_background.jpg">
</head>
<body>
	<div id="full">
		<div style="background-image: url('images/home.jpg'); width: 100%; height: 800px;">
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
		</div>
	</div>
	<div id="f1">
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
	<div id="welcome">
		<center><h1>Welcome to my project</h1>
			<font size="5">The aim of this project is to produce an interactive web application that could be used either<br> small-scale or large-scale hotels to help with the management of the hotel and dissemination of information to its<br> members.
The existing system in various hotels includes either manual work or some software that<br> does not fulfill all the requirements.
In our project on “Hotel Management System”,<br> we have tried to show how the data in hotels is managed.<br> This can be achieved by dividing the project into various modules.<br> Customer is provided with different services like checking in/out, editing entries,<br> cancel booking, etc. Enquiry about any customer can be made by customer Id. It will generate reports for customer, employees and bill for customers are generated at the time of check out.
		</font></center>
	</div>
	<div class="row" align="center">
		<center><div class="column">
			<div class="card">
				<h2>Our rooms</h2>
				We provide different types of rooms.<br>They are:<ol><li>Single room</li><li>Double room</li><li>Air-condittiond room</li><li>Deluxe room</li></ol>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<h2>Our Services</h2>
				Come alone  or bring your family with you,<br> stay here for a night or for weeks <br>stay here while on a bussiness trip<br> or some kind of conference -- <br>either way our hotel is best possible variant.
			</div>
		</div>
		<div class="column">
			<div class="card">
				<h2>Testimonial</h2>
				<quote>Good hotel , good life...</quote>
			</div>
		</div></center>
	</div>
	<div id="footer">
		<form name="subscribe" method="post" action="subscribe.php" style="padding-top: 20px">
			<font size="5" style="color: white; padding: 75px">Subscribe to our hotel for daily updates and availability.</font>
		    <input style="font-size: 20pt" type="email" name="email" placeholder="Enter your email...">
			<input style="font-size: 15pt" type="submit" name="subscribe" value="Subscribe">
		</form>
		<table id="footer_tab" align="center">
			<tbody>
				<tr>
					<th>Product Offering</th>
					<th>Partner Programs</th>
				</tr>
				<tr>
					<td>Hotels, Hotel status i.e., availability<br> and cost, Mobile apps(coming soon)</td>
					<td>Our Retail Stores, Program details,Hotel</td>
				</tr>
				<tr>
					<th>About the Site</th>
					<th>More Links</th>
				</tr>
				<tr>
					<td>Complaints, Contact Us, Payment Security, User agreement, Privacy Policy</td>
					<td>Hotel discount coupons, Hotel oofers</td>
				</tr>
			</tbody>
		</table>
		<hr style="background: #fff" width="75%">
		<center><p align="center" style="padding-bottom:20px; color: #fff">&copy; 2018 Hotel management System</p></center>
	</div>
</body>
</html>