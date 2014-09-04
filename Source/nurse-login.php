<?
session_start();
ob_start();
$id=$_POST['ID'];
$pass=$_POST['password'];

$con=mysqli_connect("localhost","root","root","Easycare");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM nurse WHERE ID_nurse='$id' and password='$pass'";
$result = mysqli_query($con,$sql) or die ( mysql_error() );


mysqli_close($con);	


$num_row= mysqli_num_rows($result);

if($num_row==1){
	echo "SUCCESS";
	$_SESSION["id"]=$id;
	$_SESSION["logged"]=1;
	echo $_SESSION["id"];
	header('location: nurse/nurse-home.php');
}
else{
	echo "FAIL";
	header('location: login-fail.html');
}
?>