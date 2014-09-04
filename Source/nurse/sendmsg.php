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

$id = $_GET['id'];
$_SESSION['cid'] = $id;
$sql="SELECT * from conditions WHERE conditionid='". $id . "'";
$result=mysqli_query($con,$sql);

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

$row = mysqli_fetch_array($result);
mysqli_close($con);

$class = $_SESSION['class'];
$sender = $_SESSION['userid'];
$receiver = $_POST['to'];
$subject = $_POST['subject'];
if($receiver == "") {
	$receiver = "Nurse";
} else 
$msg = $_POST['msg'];

$sql="INSERT INTO message (subject, sender, reciever, message) VALUES ('$subject', '$sender', '$receiver', '$msg')";

if (!mysqli_query($con,$sql)) {
  //die('Error: ' . mysqli_error($con));
  header('location:register-fail.php');
  exit();
}
else{
	echo "1 record added";
	header('location:complete-register.php');
}
mysqli_close($con);

?>