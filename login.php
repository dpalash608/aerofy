<?php

$servername = "localhost";
$username = "id9391475_aerofy";
$password = "palash12345";
$dbname = "id9391475_mydb";

session_start();
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($conn,$dbname);
$deviceid=$_POST['device_id'];
$password=$_POST['password'];

$query=" select * from user_details where sensor_id='$deviceid' && password='$password'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1)
{
	$_SESSION['username']=$deviceid;
	header('location:home.php');
}
else
{
	header('location:register.html');
}
?>