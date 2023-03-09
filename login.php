<?php
session_start();
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("online",$conn);
$p1=$_REQUEST["u"];
$p2=$_REQUEST["p"];
$res=mysql_query("select * from info where name='$p1' and psw='$p2'");
if(($rows=mysql_fetch_array($res)))
{
$_SESSION["user"]=$rows[0];
include("profile.php");
}
else
echo"Invalid User!!!";
?>