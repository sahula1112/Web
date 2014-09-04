<?
/*
  session_start();
  ob_start();

  if($_SESSION["logged"]!=1){
  header('location: ../not-login.html');
  }
  */
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
            <p class="text-right margin-top-31 margin-right-5 font-size-14"><? //echo "YOUR ID : ".$_SESSION["id"]." | "; ?><a href="../log-out.php" class="font-red">log out</a></p>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cover-msg">
              <div class="row">
                <div class="col-md-12">
                  <i class="fa fa-comments-o fa-5x margin-top-20 margin-left-20 color-bule2">   MESSAGE</i>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 text-right">
                  <a href="inbox.php"><button type="button" class="btn btn-default btn-circle margin-top-100 margin-right-30"><i class="fa fa-download fa-3x"><br>Inbox</i></button></a> 
                </div>
                <div class="col-md-5 text-left">
                  <a href="new-message.php"><button type="button" class="btn btn-default btn-circle margin-top-100"><i class="fa fa-pencil-square-o fa-3x"><br>New <br>message</i></button></a>
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





