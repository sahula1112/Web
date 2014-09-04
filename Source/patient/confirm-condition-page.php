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
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="well well-lg">
            <div class="table table-bordered">
              <p class="font-size-35 text-center"> Your condition information </p>
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center font-size-18">
                    <?
                    // picture
                    $file=$_FILES['img']['name'];
                    $new=date("Y-m-d");
                    $newName=$new.$file;
                    $url="../../upload/";
                    $picture = $url.$newName;

                    // declare session varable 
                    $_SESSION["weight"]=$_POST['weight'];
                    $_SESSION["sys"]=$_POST['sys'];
                    $_SESSION["dya"]=$_POST['dya']; 
                    $_SESSION["doseOfLasix"]=$_POST['doseOfLasix'];
                    $_SESSION["pill"]=$_POST['pill'];
                    $_SESSION["time"]=$_POST['time'];
                    $_SESSION["other"]=mysql_real_escape_string($_POST['other']);
                    $_SESSION["pictureID"]=$url.$newName;


                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Weight :</div><div class='col-md-3 text-left font-bold'>".$_SESSION["weight"]."   &nbsp;Kilograms</div></div></p>";
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Blood pressure  SYS : </div><div class='col-md-3 text-left font-bold'>".$_SESSION["sys"]."    &nbsp;mmGh.</div></div></p>";
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Blood pressure  DYA : </div><div class='col-md-3 text-left font-bold'>".$_SESSION["dya"]."    &nbsp;mmGh.</div></div></p>"; 
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Dose of Lasix   Dose : </div><div class='col-md-3 text-left font-bold'>".$_SESSION["doseOfLasix"]."   &nbsp;mg.</div></div></p>";
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Dose of Lasix   Amount :</div><div class='col-md-3 text-left font-bold'>".$_SESSION["pill"]."   &nbsp;pill</div></div></p>";
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Preriod of time : </div><div class='col-md-3 text-left font-bold'>".$_SESSION["time"]."</div></div></p>";
                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Other : </div><div class='col-md-3 text-left font-bold'>".$_SESSION["other"]."</div></div></p>";
                    
                    copy($_FILES['img']['tmp_name'],$picture);

                    echo "<div class='row'><div class='col-md-4'><p class='text-right font-size-18'>Your image : </div><div class='col-md-3 aligncenter'><img src='$picture' class='img-responsive'></div></div></p>";
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3  margin-top-20">
                    <a href=javascript:history.back(1)><button class="btn btn-danger btn-lg"> EDIT </button></a>
                  </div>
                  <div class="col-md-3 col-md-push-2 margin-top-20">
                    <a href="send-condition.php"><button class="btn btn-primary btn-lg"> Confirm and SEND </button></a>
                  </div>
                </div>
              </div>
            </div>
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





