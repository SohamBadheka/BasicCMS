<?php 
session_start();
	if(!isset($_SESSION['user']))
	{
		header("Location:index.php");

	}
	else
	{
		include("nav.php"); 

 ?>
<html>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>

    

  <div class="jumbotron">

  <center>

  <div class="col-md-2"></div>

  <div class="col-md-8">

  <p style="font-size:20px;">This feature is under construction. We will get back to you very soon.</p>

</body>

</html>
<?php
}
?>