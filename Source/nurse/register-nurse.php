<?
session_start();
ob_start();

$class=1;
$phonenumber = $_POST['phonenumber'];
$pass = $_POST['password'];
$citizen_id = $_POST['citizen-id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$e_mail = $_POST['e-mail'];

// Create connection
$con=mysqli_connect("localhost","root","root","Easycare");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="INSERT INTO user (password, fname, lname, citizenid, phonenumber, email, class)
VALUES ('$pass','$firstname','$lastname','$citizen_id','$phonenumber','$e_mail','$class')";

if (!mysqli_query($con,$sql)) {
  //die('Error: ' . mysqli_error($con));
  header('location:register-fail.php');
}
else{
	//echo "1 record added";
	header('location:complete-register.php');
}

mysqli_close($con);
?>