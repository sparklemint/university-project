<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("online",$conn);
$p1=$_REQUEST["n"];
$p2=$_REQUEST["e"];
$p3=$_REQUEST["f"];
mysql_query("insert into feedback values('$p1','$p2','$p3')");


?>