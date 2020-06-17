
<?php
	$servername = "localhost";
    $username = "id9391475_aerofy";
	$password = "palash12345";
	$dbname = "id9391475_mydb";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	$sql="SELECT * FROM user_data order by data_date desc";
	$result = mysqli_query($con,$sql);
	$json_array= array();
	while($row=mysqli_fetch_assoc($result))
	{
		$json_array[]=$row;
	}
	echo json_encode($json_array);
	
	/*echo'<pre>';
	print_r($json_array);
	echo '</pre>'*/
	
?>
