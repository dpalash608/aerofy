<?php

if((isset($_GET['did']))&&(isset($_GET['value'])))
{
    $DeviceId=filter_var($_GET['did'],FILTER_SANITIZE_STRING);
    $DeviceValue=filter_var($_GET['value'],FILTER_SANITIZE_STRING);
    $servername = "localhost";
    $username = "id9391475_aerofy";
    $password = "palash12345";
    $dbname = "id9391475_mydb";
// Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
    if ($conn->connect_error) {
        die("connection failed Failed");
    }
    else
        echo "-------------connection success-----------";
    date_default_timezone_set("Asia/Calcutta");
    $today_date=date("Y-m-d H:i:s");
    $today_time=date("Y-m-d H:i:s");   
    
    $sql = "INSERT INTO user_data VALUES('$DeviceId','$DeviceValue','$today_date','$today_time');";

    if(mysqli_query($conn, $sql)==True)
    {
        echo "entry sucess";
    }
    else 
    {
        echo "entry failed";
    } 
    $conn->close();
}

?>