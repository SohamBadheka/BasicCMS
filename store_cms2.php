<?php
	include("includes.php");

	//$a=$_GET['id'];
	$id=$_POST['p'];
	session_start();
	if(!isset($_SESSION['user']))
	{
		if(!$id)
		{
			header("Location: index.php");
		}
		
	}
	if(isset($_POST['content']))
	{
		$title=$_POST['title'];
		$content=$_POST['content'];
		$iden=$_SESSION['user'];
		$id=$_POST['p'];

		
			$q1="UPDATE webpages SET title='$title',content='$content',Iden='$iden' WHERE Id='$id'";
			$row=mysql_query($q1);
			//header("location:dashboard.php");
		
	}
	else
	{
		header("location:index.php");
	}

	
?>