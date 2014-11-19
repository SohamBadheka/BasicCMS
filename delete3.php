<?php
include("includes.php");
$l=mysql_query("DELETE from cms_users where Id=".$_GET['id']."") or die(mysql_error());
//echo $l;
header("Location:index.php");
?>