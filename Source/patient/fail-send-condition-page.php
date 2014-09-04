<?
  session_start();
  ob_start();

  if($_SESSION["class"] != 0){
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

    <section class="cover">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
          <h1 class="font-white font-size-80">Easy Care </h1>
          </div>
          <div class="col-md-6 text-right">
            <h4 class="font-white margin-top-20">
            <?

            echo "YOUR ID : ".$_SESSION["id"]; 
            ?>
            <a href="../log-out.php"><h4 class="font-red">log out</h4></a>
            </h4>
          </div>
        </div>
      </div>
    </section>
    <section class="menu">
      <div class="container">
      <div class="row">
        <div class="col-md-2 text-center">
          <a href="patient-home.php"><h4 class="font-white margin-top-20">HOME</h4></a>
        </div>
        <div class="col-md-2 text-center">
          <h4 class="font-white margin-top-20">Message</h4>
        </div>
        <div class="col-md-2 text-center">
          <a href="send-condition-page.php"><h4 class="font-white margin-top-20">Send condition</h4></a>
        </div>
        <div class="col-md-2 text-center">
          <h4 class="font-white margin-top-20">See graph</h4>
        </div>
      </div>
    </div>
    </section>
    <section class="content">
      <p class="text-center font-size-50"> Sending fail. Please try again.</p>
    </section>


    <!-- CODE END HERE -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>





