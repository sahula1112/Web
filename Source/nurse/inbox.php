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
            <p class="text-right margin-top-31 margin-right-5 font-size-14"><? echo "YOUR name : ".$_SESSION["id"]." | "; ?><a href="../log-out.php" class="font-red">log out</a></p>
          </nav>
        </div>
      </div>
    </div>
      <p class="text-center font-size-35">Inbox</p>
      <div class="conatainer">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
            <div class="well bg-table">
            <table class="table table-hover text-center">
            <thead>
              <tr class="info text-center">
                <th class="text-center">Date</th>
                <th class="text-center">From</th>
                <th class="text-center">Subject</th>
                <th class="text-center">Status</th>
              </tr>
            </thead>

            <?
                  $idpatient;
                  $startRow=0;
                  $endRow=$_GET['row'];
                  // Create connection
                  $con=mysqli_connect("localhost","root","root","Easycare");

                  // Check connection
                  if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }

                  $sql1="select * from user where class = 0";
                  $result1=mysqli_query($con,$sql1);

                  while($a=mysqli_fetch_array($result1)){
                  $userid = $a['userid'];
                  $fname = $a['fname'];
                  $lname = $a['lname'];
                  $sql="SELECT * from message  WHERE sender='$userid'";
                  $result=mysqli_query($con,$sql);

                  if (!mysqli_query($con,$sql)) {
                    die('Error: ' . mysqli_error($con));
                  }
                  

                 

                  while($row = mysqli_fetch_array($result)) {
                    echo $row['class'];
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$fname." ".$lname."</td>";
                    echo "<td>".$row['subject']."</td>";
                    if($row['status']==1){
                      echo "<td><a href='http://localhost/Web/Source/nurse/inbox.php?messageid=".$row['messageid']."'><button class='btn btn-success disabled'>Replyed</button></a></td>";

                    }
                    else{
                      echo "<td><a href='http://localhost/Web/Source/nurse/reply.php?messageid=".$row['msgid']."'&reciever=".$row['sender']."><button class='btn btn-danger'>Wating for reply</button></a></td>";
                    }
                    echo "</tr>";
                    echo "</tbody>";
                  }
                  }
                  mysqli_close($con);
                ?>

          </table>
          <div class="container">
            <div class="row font-size-18">
              <div class="col-md-6">
                <a href="next-inbox.php?row=<? echo $endRow; ?>" class="font-white"><p class="text-center">next</p></a>
              </div>
              <div class="col-md-6">
                <a href="clear-inbox.php" class="font-white"><p class="text-center">clear</p></a>
              </div>
            </div>
          </div>
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





