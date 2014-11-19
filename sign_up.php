<!DOCTYPE html>
<html lang="en">
<title>Registration Form</title>
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/custom.css" rel="stylesheet">

<body style="background-color:#ddd">

<div class="container">
<br/><br/><br/><br/>
<div class="row">

<div class="col-md-4"></div>
 <div class="col-md-4" style="background-color:#428BCA; display: block; text-align:center;">

	<form id="form1" action="register_script.php" method="post" name='registration'>
            
		<h1 style="color: white; font-size:70px;">Sign Up Here!</h1><hr>
		<p><input class="form-control" maxlength="10" type="text" name="fname" value="" placeholder="Firstname" required></p>
		<p><input class="form-control" maxlength="10" type="text" name="lname" value="" placeholder="Lastname" required></p>
		<p><input class="form-control" type="email" name="email" size="50" placeholder="me@example.com" required></p>
		<p><input class="form-control" type="text" name="username" value="" placeholder="Take a Username" required></p>
		<p><input class="form-control" type="password" name="password" value="" placeholder="Password" required></p><br> 	
		<center><input class="btn btn-lg btn-default" type="Submit" value="Register" /></center>
		<p></p><br>
                
	</form>
  
</div>
<div class="col-md-4"></div>
</div>
</div>

            
<script src="./js/bootstrap.min.js"></script>
 


</html>
