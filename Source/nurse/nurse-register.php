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
      <div class="row">
        <div class="col-md-12 text-center">
          <h3> Nurse register </h3>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-push-4">
          <div class="well well-lg bg font-white">
          <table class="table table-striped">
          <form role="form" class="form-inline" action="register-nurse.php" method="post">
          
            <div class="form-group">
              <label>Phone number : &nbsp;&nbsp;</label>
              <input type="text" class="form-control" name="phonenumber" required>
            </div>
         
          <br>
          
            <div class="form-group">
              <label>Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="password" class="form-control" name="password" required>
            </div>
         
          <br>
          
            <div class="form-group">
              <label>Citizen ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" class="form-control" name="citizen-id" required>
            </div>
         
          <br>
          
            <div class="form-group">
              <label>First name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" class="form-control" name="firstname" required>
            </div>
         
          <br>
          
            <div class="form-group">
              <label>Last name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" class="form-control" name="lastname" required>
            </div>
         
          <br>
          
            <div class="form-group">
              <label>E-mail : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input type="text" class="form-control" name="e-mail" required>
            </div>
         
          <br> 

          <button type="submit" class="btn btn-primary btn-lg">Submit</button>    
        </form> 
         </table>
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






