<?
ob_start();
$id;
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

$sql="SELECT max(userid) FROM user";
$userid=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($userid) {
 	
  $id=$row['userid'];
}

if($id == " "){
	$id=1;
	echo $id;
}
else{
	$id+=1;
	echo $id;
}
/*
$sql2="INSERT INTO user (userid, password, fname, lname, citizen_ID, phonenumber, email, class)
VALUES ('$id', '$pass','$firstname','$lastname','$citizen_id','$phonenumber','$e_mail','$class')";

if (!mysqli_query($con,$sql2)) {
  die('Error: ' . mysqli_error($con));
  //header('location:register-fail.php');
}
else{
	echo "1 record added";
	//header('location:complete-register.php');
}
*/
mysqli_close($con);
?>