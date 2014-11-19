<?php

	include("includes.php");

	session_start();

	if(!isset($_SESSION['user']))

	{

		header("Location: index.php");

	}

	if(isset($_POST['content']))

	{

		$title=$_POST['title'];

		$content=$_POST['content'];

		$iden=$_SESSION['user'];


		$q="insert into webpages(Iden,title,content) values ('$iden','$title','$content')";

		$i=mysql_query($q);



	}

	

?>