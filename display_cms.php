<?php

	include("includes.php");

	session_start();

	if(!$_SESSION['user'])
	{
		header("Location: index.php");
	}
	
	else
	{

?>
<html>

<head> 

	<link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="css/custom.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Lora:400italic">

   </head>

<body>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>





  <div class="jumbotron">

 <a class="btn btn-lg btn-success" href="dashboard.php" type="button">Back to the dashboard</a>
<?php

	$sql="select * from webpages where Id=".$_GET['id']."";

	$rs=mysql_query($sql);

	$row=mysql_fetch_array($rs);

	

	echo "<div class=\"col-md-12\"><h3><center>".$row['title']."<center></h3></div><br><br></div>";

	echo "<div class=\"content\"><div class=\"col-md-12\"><p>".$row['content']."</p><br></div>";

	echo "<br><hr><br>";
}

?>

</div>


</body>

</html>