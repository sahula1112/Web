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
$sql="SELECT * from conditions WHERE ID_condition='". $id . "'";
$result=mysqli_query($con,$sql);

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

$row = mysqli_fetch_array($result);
mysqli_close($con);
?>

<?
  session_start();
  ob_start();

  if($_SESSION["class"]!=1){
  header('location: ../not-login.html');
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<section>
      <div class="container">
        <div class="row font-white">
          <div class="col-md-8 col-md-push-2">
            <div class="well well-lg bg">
            <div class="table table-bordered">
            <p class="font-size-35 text-center font-bold">Reply Condition</p>
            <form class="form-inline" role="form"  enctype="multipart/form-data" action="sendreply.php" method="post">
                <div class="container font-size-18">

                <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>ID Condition :</p>
                    </div>
                    <div class="col-md-3 text-left">
                      <? echo $row['ID_condition']; ?>
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>ID Patient : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <? echo $row['ID_patient']; ?>
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>Date : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <? echo $row['dates']; ?>
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>Weight : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black inline font-bold"><? echo $row['weight']; ?></p> Kilograms
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>SYS : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black inline font-bold"><? echo $row['sys']; ?></p> mmGh.
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>DYA : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black inline font-bold"><? echo $row['dya']; ?></p> mmGh.
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>Dose of Lasix : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black inline font-bold"><? echo $row['doseOfLasix']; ?></p> mg.
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>Amount of Lasix : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black inline font-bold"><? echo $row['amountOfLasix']; ?></p> pills.
                    </div>
                 </div>

                 <div class="row margin-top-20">
                    <div class="col-md-3 text-right">
                      <p>Period of Time : </p>
                    </div>
                    <div class="col-md-3 t text-left">
                      <p class="font-black inline font-bold"><? echo $row['periodOftime']; ?></p> 
                    </div>
                 </div>

                 <div class="row margin-top-20">
                  <div class="col-md-3 text-right">
                    <p>Picture : </p>
                    </div>
                    <div class="col-md-3 text-left">
                      <p class="font-black"><img src='<? echo $row['pictureID']; ?>' class="img-responsive"> 
                    </div>
                 </div>

                <div class="row margin-top-20">
                  <div class="col-md-3 text-right">
                    <p>Reply Message : </p>
                  </div>
                  <div class="col-md-3 text-left">
                    <div class="form-group">
                      <div class="input-group">
                         <textarea type="text" class="form-control" rows="10" cols="55" name="msg" placeholder="Message"></textarea>
                       </div>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20 margin-bottom-50">
                  <div class="col-md-7  text-right">
                     <button type="submit" class="btn btn-success btn-lg">Submit</button>
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
    </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>