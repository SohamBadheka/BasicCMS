
<?php
include("includes.php");
$rs=mysql_query("select content from webpages where Id=".$_GET['id']."") or die(mysql_error());
//echo $l;

$row=mysql_fetch_array($rs);
echo $row['content'];

?>