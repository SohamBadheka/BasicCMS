<?php

    include("includes.php");//Aaama maro database selected chhe ane badhu aa file ma lakhelu chhe



  

  if(empty($_POST['user']) || empty($_POST['pass']))

  {

    echo "<b><center><br><br>";

    echo "Please Fill The Fields!";

    echo "</b></center>";

    

  }



  else

  {


    $user1 = strtolower($_POST['user']);

    $pass1 = $_POST['pass'];

    $result = mysql_query("select * from cms_users where user = '".$user1."' ") or die(mysql_error());

    $row = mysql_fetch_array($result);

    $user = strtolower($row['user']);

    $pass = $row['pass'];

    

    if($user1=="admin" && $pass1=="admin")

    {

      session_start();

      $_SESSION['admin']="admin";

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

        echo "<b><center><br><br>";

        echo "Password is wrong!";

        echo "</b></center>";

      }

    }

    else

    {

      echo "<b><center><br><br>";

      echo "Username doesn't exist, please register yourself first!";

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
  

  </head>





   <body style="background-color:#ddd">

      



    <div class="container">

        <div class="row">

          <br><br><br>

          <div class="col-md-4"></div>

       <div class="col-md-4" style="background-color:white; display: block;">



          <br><br><h1 style="display: block; font-family:'21st Century', fantasy; text-align:center;">Please Login Here!</h1><hr>

          <form class="form-horizontal" action="login.php" method="post">

      

        <h4>Username:<h4><input type="text" name="user" class="form-control" placeholder="Username" required="">

        <h4>Password:</h4><input type="password" name="pass" class="form-control" placeholder="Password" required="">

       <br>

        

       <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in"><br><br><br>

        

        </div>

      

      </form>

       <div class="col-md-4"></div>

      </div>

    </div>

  
</body>

</html>

