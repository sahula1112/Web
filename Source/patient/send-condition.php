<?
session_start();
ob_start();

$status=0;
$weight=$_SESSION["weight"];
$sys=$_SESSION["sys"];
$dya=$_SESSION["dya"]; 
$doseOfLasix=$_SESSION["doseOfLasix"];
$pill=$_SESSION["pill"];
$time=$_SESSION["time"];
$other=$_SESSION["other"];
$pictureID=$_SESSION["pictureID"];
$idpatient=$_SESSION["id"];


$con=mysqli_connect("localhost","root","root","Easycare");

// Check connection

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="SELECT max(ID_condition) FROM conditions";
$id_condition=mysqli_query($con,$sql);
$id_cond;

while($row = mysqli_fetch_array($id_condition)) {
 	
  $id_cond=$row[0];
}

if($id_cond == " "){
	$id_cond=1;
	//echo $id_cond;
}
else{
	$id_cond+=1;
}



$sql="INSERT INTO conditions (ID_condition, ID_patient, status, weight, sys, dya, doseOfLasix, amountOfLasix, periodOftime, pictureID, other) 
VALUES ('$id_cond','$idpatient','$status','$weight','$sys','$dya','$doseOfLasix','$pill','$time','$pictureID','$other')";

if (!mysqli_query($con,$sql)) {
  //die('<br>Error: ' . mysqli_error($con));
	header('location: fail-send-condition-page.php');

}
else{
	header('location: complete-send-condition-page.php');
}

mysqli_close($con);	


copy($_FILES['img']['tmp_name'],$pictureID);

// test
/* 
echo "<br> Current ID : ".$id_cond;
echo "<br>WEIGHT : ".$weight."<br>";
echo "SYS : ".$sys."<br>";
echo "DYA : ".$dya."<br>";
echo "Dose of Lasix : ".$doseOfLasix."<br>";
echo "Pill : ".$pill."<br>";
echo "Time : ".$time."<br>";
echo "Other symptom : ".$other."<br>";
echo "Cilck to see image : <a href='$pictureID' target=_blank>$pictureID</a>";
*/

unset($_SESSION["weight"]);
unset($_SESSION["sys"]);
unset($_SESSION["dya"]); 
unset($_SESSION["doseOfLasix"]);
unset($_SESSION["pill"]);
unset($_SESSION["time"]);
unset($_SESSION["other"]);
unset($_SESSION["pictureID"]);

// test
/*
echo $_SESSION["weight"];
echo $_SESSION["sys"];
echo $_SESSION["dya"]; 
echo $_SESSION["doseOfLasix"];
echo $_SESSION["pill"];
echo $_SESSION["time"];
echo $_SESSION["other"];
echo $_SESSION["pictureID"];
echo "DONE";
*/

