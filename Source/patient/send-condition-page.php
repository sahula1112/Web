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
    <script type="text/javascript" src="/js/lib/bootstrap-2.0.2.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link type="text/javascript" href="../js/dropdown.js">
    <script type="text/javascript">
    $(document).ready(function(){
        $(".dropdown-toggle").dropdown();
    });  
    </script>
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
            <p class="font-size-24 text-center font-bold">Please input your information</p>
            <form class="form-inline" role="form"  enctype="multipart/form-data" action="confirm-condition-page.php" method="post">
                <div class="container">
                  
                <div class="row">
                  <div class="col-md-2 text-right margin-top-5">
                   <p class="font-size-18"> Weight : </p> 
                  </div>
                  <div class="col-md-3 text-left">
                    <div class="form-group">
                      <div class="input-group">
                         <input type="text" class="form-control" placeholder="kg." name="weight">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20 ">
                  <div class="col-md-2 text-right margin-top-5">
                    <p class="font-size-18">Blood pressure : </p>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="form-group padding-right-50">
                      <div class="input-group">
                        <div class="input-group-addon">SYS</div>
                         <input tyep="text" class="form-control" placeholder="mmHg." name="sys">
                      </div>
                    </div>
                    <div class="form-group margin-top-5 padding-right-50">
                      <div class="input-group">
                        <div class="input-group-addon">DYA</div>
                         <input type="text" class="form-control" placeholder="mmHg." name="dya">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                   <p class="font-size-18"> Dose of Lasix : </p>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="input-group"> 
                         dose : &nbsp;&nbsp;&nbsp;&nbsp;<select name="doseOfLasix" class="form-control">
                          <option value="20">20 mg.</option>
                          <option value="40">40 mg.</option>
                          <option value="80">80 mg.</option>
                         </select><br>
                         amount : <select name="pill" class="form-control">
                          <option value="0.5">0.5 pill</option>
                          <option value="1">1 pill</option>
                          <option value="2">2 pills</option>
                          <option value="3">3 pills</option>
                          <option value="4">4 pills</option>
                          <option value="5">5 pills</option>
                         </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <p class="font-size-18">Period of time : </p>
                  </div>
                  <div class="col-md-3 text-left">
                    <div class="form-group">
                      <div class="input-group">
                         <input type="radio" name="time" value="morning"> Morning <br>
                         <input type="radio" name="time" value="noon"> Noon <br>
                         <input type="radio" name="time" value="evening"> Evening 
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row margin-top-20">
                  <div class="col-md-2 text-right">
                    <p class="font-size-18">Other symptom : </p>
                  </div>
                  <div class="col-md-3 text-left">
                    <div class="form-group">
                      <div class="input-group">
                         <textarea type="text" rows="10" cols="50" name="other" placeholder="Describe your strange symptom."></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload picture</label>
                  <input type="file" name="img" >
                  <p class="help-block">Choose your picture which you need to send to us.</p>
                </div>

                <div class="row margin-top-20 margin-bottom-50">
                  <div class="col-md-5 text-left">
                     <button type="submit" class="btn btn-primary btn-lg">Next</button>
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



    <!-- CODE END HERE -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>





