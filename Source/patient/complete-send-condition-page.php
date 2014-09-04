<?
  session_start();
  ob_start();

  if($_SESSION["logged"] != 2){
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
           <a href="patient-home.php"><p class="font-size-35 margin-left-15 font-bold inline">Easy Care |</p><p class="font-size-24 inline">Patient</p></a>
        </div>
        <div class="col-md-8">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <ul class="nav nav-pills">
                <li><a href="patient-home.php"><p class="font-size-18">HOME</p></a></li>
                <li><a href="#"><p class="font-size-18">Message</p></a></li>
                <li><a href="send-condition-page.php"><p class="font-size-18">Send condition</p></a></li>
                <li><a href="#"><p class="font-size-18">See graph</p></a></li>
              </ul>
             </div>
            <p class="text-right margin-top-15 margin-right-30 font-size-14"><? echo "YOUR ID : ".$_SESSION["id"]." | "; ?><a href="../log-out.php" class="font-red">log out</a></p>
          </nav>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="well bg">
        <div class="row margin-top-20">
          
          <div class="col-md-6 col-md-push-3 text-center">
            <p class="text-center font-size-50"> Sending complete.</p>
            <a href="patient-home.php"><button class="btn-danger btn btn-lg aligncenter"><p class=" font-size-24"> Back to home.</p></button></a>
          </div>
        </div>
        </div>
      </div>  
    </section>


    <!-- CODE END HERE -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>





