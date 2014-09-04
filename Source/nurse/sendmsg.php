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

$sender = $_SESSION['id'];
$receiver = $_POST['receiver'];
$msg = $_POST['msg'];

$sql="INSERT INTO message (senderid, reciever, message) VALUES ('$sender', '$receiver', '$msg')";

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