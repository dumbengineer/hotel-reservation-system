<?php
session_start();
$connect=mysqli_connect("localhost","root","","data");
$username=$_POST['username'];
$password=$_POST['password'];
$q="SELECT * FROM adminlogin WHERE username='$username' && password='$password'";
$result=mysqli_query($connect,$q);
$num=mysqli_num_rows($result);
if($num>0){
	$_SESSION['username']=$username;
	header('Location:rd.php');
}
else{
echo'
<script type="text/javascript">
	window.alert("username or password incorrect!!!");
</script>';
}
?>