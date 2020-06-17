<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.html');
}
echo $_SESSION['username'];
?>
<html>
    <head>
        <title>Aerofy NST-Your data</title>
        
    </head>
    <body>
        <h1 align="center">AEROFY Next Step Technology</h1>
        <h1 align="center">AEROFY NST fetching data from the central database</h1>




<?php 
$servername = "localhost";
$username = "id9391475_aerofy";
$password = "palash12345";
$dbname = "id9391475_mydb";

session_start();
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno())
	echo "Connection could not be estrablished...".mysqli_connect_error();
else
	echo "";
$query="SELECT * FROM `user_data`";
$result=mysqli_query($conn,$query);
echo "<br>";
echo "<table align='center' width='600' border='1' cellpadding='1' cellspacing='1'>";
echo "<tr><td><b>Device Id</b></td><td><b>Device value</b></td><td><b>Date<b></td><td><b>Time</b></td>";
foreach($result as $row)
{
	echo "<tr>";
	echo "<td>$row[device_id]</td><td>$row[device_value]</td><td>$row[data_date]</td><td>$row[data_time]</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
			
			
			
			