<?php
session_start();
$host = "localhost";
$username = "root";
$password = "root";
$database = "Easycare";

$con=mysqli_connect($host,$username,$password,$database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$class = $_SESSION['class'];
$sender = $_SESSION['userid'];
$receiver = $_POST['to'];
$subject = $_POST['subject'];
if($receiver == "") {
	$receiver = "Nurse";
} else 
$msg = $_POST['message'];

$sql="INSERT INTO message (subject, sender, receiver, message) VALUES ('$subject', '$sender', '$receiver', '$msg')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
  echo  $class;
  echo  $sender;
  echo  $receiver;
  echo  $subject."<br>".$msg;
  //header('location:register-fail.php');
  
}
else{
	echo "1 record added";
	//header('location:complete-register.php');
}
mysqli_close($con);

?>