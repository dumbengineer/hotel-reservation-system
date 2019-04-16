<?php
include("connection.php");
$roomno=$_GET['roomno'];
if (mysqli_query($a,"UPDATE room set status='Unbooked' WHERE roomno=$roomno")) {
	header("Location:rd.php");
}
?>