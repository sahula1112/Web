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
           <a href="nurse-home.php"><i class="fa fa-plus-square fa-5x color-blue"></i><p class="font-size-35 margin-left-15 font-bold inline">Easy Care |</p><p class="font-size-24 inline">Nurse</p></a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row margin-top-20">
        <div class="col-md-12">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <ul class="nav nav-pills">
                <li><a href="nurse-home.php"><i class="fa fa-home  fa-2x margin-top-20"> HOME</i></a></li>
                <li><a href="register.php"><i class="fa fa-check-square-o  fa-2x margin-top-20"> Register</i></a></li>
                <li><a href="send-message.php"><i class="fa fa-comments-o fa-2x margin-top-20"> Message</i></a></li>
                <li><a href="reply-condition-page.php?row=10"><i class="fa fa-envelope fa-2x margin-top-20"> Reply condition</i></a></li>
                <li><a href="see-graph.php"><i class="fa fa-area-chart fa-2x margin-top-20"> See graph </i></a></li>
              </ul>
             </div>
            <p class="text-right margin-top-31 margin-right-5 font-size-14"><? echo "YOUR ID : ".$_SESSION["id"]." | "; ?><a href="../log-out.php" class="font-red">log out</a></p>
          </nav>
        </div>
      </div>
    </div>
<section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="well well-lg bg">
            <div class="table table-bordered">
            <p class="font-size-24 text-center font-bold font-white">New message</p>
            <form class="form-inline" role="form"  enctype="multipart/form-data" action="sendmsg.php" method="post">
                <div class="container font-white">

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <label><p class="font-size-18">To : </p></label>
                  </div>
                  <div class="col-md-5 text-left">
                    <div class="form-group">
                         <input type="text" class="form-control" name="to" required>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <label><p class="font-size-18">Subject : </p></label>
                  </div>
                  <div class="col-md-5 text-left">
                    <div class="form-group">
                         <input type="text" class="form-control" name="subject" required>
                      
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <label><p class="font-size-18"> Message : </p></label>
                  </div>
                  <div class="col-md-3 text-left">
                    <div class="form-group font-black">
                         <textarea type="text" rows="10" cols="50" name="message" placeholder="Message"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <div class="form-group">
                     <label><p class="font-size-18">Upload picture : </p></label>
                    </div>
                    </div>
                    <div class="col-md-3  text-left">
                     <input type="file" name="img" >
                     </div>
                  
                </div>

                <div class="row margin-top-20 margin-bottom-50">
                  <div class="col-md-7 text-right">
                     <button type="submit" class="btn btn-success btn-lg">SEND</button>
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