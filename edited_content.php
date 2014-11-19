<?php
	include("includes.php");
	session_start();
	if(!$_SESSION['user'])
	{
		header("Location: index.php");
	}
	else
	{
		$title=$_POST['title'];
		$content=$_POST['content'];
		$iden=$_SESSION['user'];
		
		$q="UPDATE webpages SET title='$title,content='$content',Iden='$iden' WHERE Id='$id'";
		$row=mysql_query($q);
		//echo $id;
		Header("Location:dashboard.php");
	}
?>
