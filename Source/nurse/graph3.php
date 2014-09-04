<?
  session_start();
  ob_start();

  if($_SESSION["class"]!=1){
  header('location: ../not-login.html');
  }
?>
<?php 
$host = "localhost";
$username = "root";
$password = "root";
$database = "Easycare";

$con=mysqli_connect($host,$username,$password,$database);
$sql="SELECT * from conditions WHERE patient_ID='0000000001'";
$result=mysqli_query($con,$sql);
$data = array();
$date = array();
while($row = mysqli_fetch_array($result)) {
	array_push($data, $row['weight']);
	array_push($date, substr($row['dates'], 0, 10));
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easycare</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stlye.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script>
    $(function () {
    $('#container').highcharts({
        title: {
            text: 'Weight Diagram',
            x: -20 //center
        },
        xAxis: {
            categories: [<?php for($i=0; $i<count($date);$i++){ echo '"' . $date[$i] . '"'; if($i!=count($date) - 1) {echo ", ";}} ?>]
        },
        yAxis: {
            title: {
                text: 'Weight'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'Kg.'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Weight',
            data: [<?php for($i=0; $i<count($data);$i++){ echo $data[$i]; if($i!=count($data)) {echo " ,";}} ?>] 
        }]
    });
});
	</script>
	  </head>
  <body>
    <div class="container">
      <div class="row">
       <div class="col-md-4">
           <a href="nurse-home.php"><i class="fa fa-plus-square fa-5x"></i><p class="font-size-35 margin-left-15 font-bold inline">Easy Care |</p><p class="font-size-24 inline">Nurse</p></a>
        </div>
        <div class="col-md-8 text-right">
           <p class="text-right margin-top-31 margin-right-5 font-size-24"><? echo $_SESSION["id"]." | "; ?><button class="btn btn-danger btn-lg "><a href="../log-out.php" class="font-white">log out</a></button></p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row margin-top-20">
        <div class="col-md-12">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <ul class="nav nav-pills">
                <li class="active"><a href="nurse-home.php"><i class="fa fa-home  fa-2x"> HOME</i></a></li>
                <li><a href="register.php"><i class="fa fa-check-square-o  fa-2x"> Register</i></a></li>
                <li><a href="send-message.php"><i class="fa fa-comments-o fa-2x"> Message</i></a></li>
                <li><a href="reply-condition-page.php?row=10"><i class="fa fa-envelope fa-2x"> Reply condition</i></a></li>
                <li><a href="see-graph.php"><i class="fa fa-area-chart fa-2x"> See graph </i></a></li>
              </ul>
             </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="container" style="width:100%; height:400px;" ></div>
            </div>
        </div>
    </div>

  	<div class="container">
        <div class="row margin-top-50">
          <div class="col-md-8 col-md-push-2">
            <div class="well well-lg">
            <div class="table table-bordered">
            <p class="font-size-24 text-center font-bold">Change date</p>
            <form class="form-inline" role="form"  enctype="multipart/form-data" action="sendmsg.php" method="post">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                  Start date :
                  <input type="date" name="bday">
                        </div>
                        <div class="col-md-3 col-md-push-1 text-center">
                  End date :
                        <input type="date" name="bday">
                        </div>
                    </div>
                    <div class="row margin-top-20">
                        <div class="col-md-7 text-right">
                            <input type="submit" class="form-control margin-bottom-20"value="Change">
                        </div>
                    </div>
                </div>

            
            </form>
          </div>
        </div>
          </div>
        </div>
      </div>

    </div>

  </body>
  </html>