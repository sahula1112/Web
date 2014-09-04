<?
ob_start();
$id = $_POST['patient-id'];
$phonenumber = $_POST['phonenumber'];
$pass = $_POST['password'];
$re_pass = $_POST['re-password'];
$citizen_id = $_POST['citizen-id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$e_mail = $_POST['e-mail'];
$weight = $_POST['weight'];

// Create connection
$con=mysqli_connect("localhost","root","root","Easycare");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO patient (patient_ID, password, firstname, lastname, citizen_ID, birthdate, age, weight, phonenumber, email)
VALUES ('$id', '$pass','$firstname','$lastname','$citizen_id','$birthday','$age','$weight','$phonenumber','$e_mail')";

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