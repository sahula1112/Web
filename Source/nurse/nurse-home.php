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

    <!-- CODE START HERE -->
    <div class="container">
      <div class="row">
       <div class="col-md-4">
           <a href="nurse-home.php"><i class="fa fa-plus-square fa-5x"></i><p class="font-size-35 margin-left-15 font-bold inline">Easy Care |</p><p class="font-size-24 inline">Nurse</p></a>
        </div>
        <div class="col-md-4 col-md-push-4">
           <p class="text-right margin-top-31 margin-right-5 font-size-14"><? echo "YOUR name : ".$_SESSION["id"]." | "; ?><a href="../log-out.php" class="font-red">log out</a></p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row margin-top-20">
        <div class="col-md-12">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <ul class="nav nav-pills">
                <li class="active"><a href="nurse-home.php"><i class="fa fa-home  fa-2x margin-top-20 "> HOME</i></a></li>
                <li><a href="register.php"><i class="fa fa-check-square-o  fa-2x margin-top-20"> Register</i></a></li>
                <li><a href="send-message.php"><i class="fa fa-comments-o fa-2x margin-top-20"> Message</i></a></li>
                <li><a href="reply-condition-page.php?row=10"><i class="fa fa-envelope fa-2x margin-top-20"> Reply condition</i></a></li>
                <li><a href="see-graph.php"><i class="fa fa-area-chart fa-2x margin-top-20"> See graph </i></a></li>
              </ul>
             </div>
          </nav>
        </div>
      </div>
    </div>
   
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cover">
              <div class="row">
                <div class="col-md-4 text-center margin-top-260">
                  <a href="#" class="btn btn-default btn-circle"><i class="fa fa-comments-o fa-3x margin-top-50"> <br>MESSAGE </i></a>
                </div>
                <div class="col-md-4 text-center margin-top-260">
                  <a href="#" class="btn btn-default btn-circle"><i class="fa fa-area-chart fa-3x margin-top-50"> <br>GRAPH </i></a>
                </div>
                <div class="col-md-4 text-center margin-top-260">
                  <a href="#" class="btn btn-default btn-circle"><i class="fa fa-envelope fa-3x margin-top-50"> <br>CONDITION </i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row margin-top-50">
          <div class="col-md-4">
            <div class="well">
              <div class="row">
                <div class="col-md-12 text-center">
                  <i class="fa fa-heart fa-5x color-bule"></i>
                </div>
                <div class="col-md-10 col-md-push-1 margin-top-10">
                  <p class="font-size-18">This website provide the message service, condtion message, and the graph for monitoring your improve.
                  This website make the contact between patient and nurse easily. And we hope this website can help everyone.</p>
                </div>
            </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="well ">
              <div class="row">
                <div class="col-md-12 text-center">
                  <i class="fa fa-area-chart fa-5x color-bule"></i>
                </div>
                <div class="col-md-10 col-md-push-1 margin-top-10">
                  <p class="font-size-18">This website provide the message service, condtion message, and the graph for monitoring your improve.
                  This website make the contact between patient and nurse easily. And we hope this website can help everyone.</p>
                </div>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="well ">
              <div class="row">
                <div class="col-md-12 text-center">
                  <i class="fa fa-desktop fa-5x color-bule"></i>
                  <i class="fa fa-laptop fa-5x color-bule"></i>
                  <i class="fa fa-mobile fa-5x color-bule"></i>
                </div>
                <div class="col-md-10 col-md-push-1 margin-top-10">
                  <p class="font-size-18">This website provide the message service, condtion message, and the graph for monitoring your improve.
                  This website make the contact between patient and nurse easily. And we hope this website can help everyone.</p>
                </div>
            </div>
            </div>
          </div>
      </div>
    </div>
    <!-- CODE END HERE -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>





