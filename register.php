<?php

$servername = "localhost";
$username = "id9391475_aerofy";
$password = "palash12345";
$dbname = "id9391475_mydb";

session_start();
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($conn,$dbname);
$name=$_POST['name'];
$address=$_POST['address'];
$mobile_no=$_POST['number'];
$email=$_POST['email'];
$deviceid=$_POST['device_id'];
$bikeno=$_POST['bike_no'];
$password1=$_POST['password'];

$query=" INSERT INTO `user_details` VALUES('$deviceid','$password1','$name','$address','$mobile_no','$email','$bikeno');";
$result=mysqli_query($conn,$query);
/*
//---------------------------mail------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer-master/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer-master/src/SMTP.php';
$uname="dpalash608@gmail.com";


$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'aerofysolution2019@gmail.com'; // email
$mail->Password = 'aerofysol2019'; // password
$mail->setFrom('aerofysolution2019@gmail.com', 'AEROFY'); // From email and name
$mail->addAddress($email, $name); // to email and name
$mail->Subject = 'welcome';
$mail->msgHTML("Welcome to aerofy solutions "); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
*/
header('location:login.html');
?>