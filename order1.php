<?php
session_start();
include "connectionpage.php";
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];
$d=$_REQUEST['t4'];
$e=$_REQUEST['t5'];
$f=$_REQUEST['t6'];
$date=date('Y-m-d');
mysql_query("insert into order1 values('$a','$b','$c','$d','$e','$f','$date')");

echo "<script type=\"text/javascript\">
alert(\"Your order of ". $a." added sucessfully  Your product will be delivered within two hours\");
</script>";

?>