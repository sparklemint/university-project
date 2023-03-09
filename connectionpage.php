<?php
$user="root";
$pass="";
$db="online";
$link=mysql_connect("localhost",$user,$pass);
if (!$link)
die("couldn't connect to the mysql");
mysql_select_db($db)
or die("couldn't open $db".mysql_error());
?>