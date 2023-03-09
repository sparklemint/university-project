<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("online",$conn);
$p1=$_REQUEST["n"];
$p2=$_REQUEST["p"];
$p3=$_REQUEST["e"];
$p4=$_REQUEST["c"];
$p5=$_REQUEST["p1"];
$p6=$_REQUEST["a"];
mysql_query("insert into info values('$p1','$p2','$p3','$p4',$p5,'$p6')");
echo"You Are Register";

?>