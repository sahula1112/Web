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

$message = $_POST['msg'];
$id = $_SESSION['cid'];

$sql="UPDATE conditions SET reply_cond='". $message ."' ,status = 1 WHERE ID_condition='" . $id . "'";

if (!mysqli_query($con,$sql)) {
  //die('Error: ' . mysqli_error($con));
  echo "Failed to update";
}
else{
	header('location:reply-condition-page.php?row=10');
}
mysqli_close($con);
session_end();

?>
