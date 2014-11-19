<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>



    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="css/custom.css" rel="stylesheet">



  </head>

  <body>



<?php

include ("includes.php");

$fname=$_POST['fname'];

$lname=$_POST['lname'];

$email=$_POST['email'];

$user=$_POST['username'];

$pass=$_POST['password'];





$query="insert into cms_users (fname,lname,user,pass,email) values('$fname','$lname','$user','$pass','$email')";

$q=mysql_query($query);



echo "<br><br><br><br>";

echo "<div class=\"jumbotron\">

  <center>

  <h2>You registered succesfully to the <b>Custom CMS.</b><br> You can now get started !

  </h2>";



echo '<br/><br/><a href="login.php" class="btn btn-lg btn-default" role="button">Get Started</a></center></div>';

?>

