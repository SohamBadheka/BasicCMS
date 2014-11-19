<?php 
//session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');


  include("includes.php");//Database configuration is provided here !
  
  if(!empty($_POST['user']) || !empty($_POST['pass']))
  
  {
    //$i=0;
    $user1 = strtolower($_POST['user']);
    $pass1 = $_POST['pass'];
    $result = mysql_query("select * from cms_users where user = '".$user1."' ") or die(mysql_error());
    $row = mysql_fetch_array($result);
    $user = strtolower($row['user']);
    $pass = $row['pass'];

    
     if($user1=="admin" && $pass1=="admin")
     {
       session_start();
       $_SESSION['admin']="admin1";
       header("Location:admin.php");
     }
    if($user == $user1)
    {

      if($pass == $pass1)
      { 
        session_start();
        $_SESSION['user'] = $user1;
        header("Location:intro.php");
      }
      else
      {
        echo "<b><center>";
        echo "<br><br><br>Password is wrong!";
        echo "</b></center>";
      }
    
    }
    else
    {
      echo "<b><center>";
      echo "<br><br><br>Username doesn't exist, please register yourself first!";
      echo "</b></center>";
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
   

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script type="text/javascript">
function reg()
{
  //alert("dsada");
  window.location="sign_up.php";
} 
</script> 
  
  </head>


   <body style="background-color:#ddd">
      

    <div class="container">
        <div class="row">

          <form class="form-horizontal" action="index.php" method="post">
          <br><br><h1 style="display: block; font-family:'21st Century', fantasy;">Please Login Here!</h1><hr>
        <div class="col-md-3" style="background-color:white">
        <br><h4>Username:<h4><input type="text" name="user" class="form-control" placeholder="Username" required="">
        <h4>Password:</h4><input type="password" name="pass" class="form-control" placeholder="Password" required="">
       <br>
        
       <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
       <br/><br/><br/><br/><br/><br/>
        
        </div></form>
            <div class="col-md-9" style="background-color:#428BCA; display: block; text-align:center;"><br>
                <h1 style="font-family:Roboto; font-weight: bold; color:#dcdcdc; display: block;">Welcome to the Content Management System</h1><hr>
                
                <p style="color:white; font-family:Roboto; font-size:30px; display: block;">Front end Work : <b>Twitter Bootstrap</b></p> 
                    <p style="color:white; font-family:Roboto; font-size:30px; display: block;">Back end Work : <b>PHP</b></p>
                   <input type="button" class="btn btn-lg btn-success" value="Sign Up" onclick="reg()"><h3 style="color:white; font-family:Roboto;"> Today to enjoy the service!</h3><br>
            </div> <!-- /container -->
   
        </div>
    </div>
       <script src="./js/bootstrap.min.js"></script>


  </body>
</html>
