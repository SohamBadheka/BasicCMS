<?php
include("includes.php");
$l=mysql_query("DELETE from webpages where Id=".$_GET['id']."") or die(mysql_error());
//echo $l;
header("Location:dashboard.php");
?>