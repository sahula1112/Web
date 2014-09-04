<?
ob_start();
session_start();
$phonenumber=$_POST['ID'];
$pass=$_POST['password'];

$con=mysqli_connect("localhost","root","root","Easycare");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM user WHERE phonenumber='$phonenumber' and password='$pass'";
$result = mysqli_query($con,$sql) or die ( mysql_error() );


mysqli_close($con);	


$num_row= mysqli_num_rows($result);

if($num_row==1){
	$row = mysqli_fetch_array($result);
	$_SESSION["class"]=$row['class'];
	$_SESSION["id"]=$id;
	$_SESSION["logged"]=2;
	$_SESSION["ranked"]=;
	echo $_SESSION["id"];
	echo "SUCCESS";
	header('location: patient/patient-home.php');
}
else{
	echo "FAIL";
	header('location: login-fail.html');
}
?>