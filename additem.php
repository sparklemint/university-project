<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Foodfun</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
	<!-- Header Area Starts -->
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
<br>
<br>
<br>
<br>
<br>
<html>
<body>
<table width="100%" height="75%" cellpadding="8">
<?php
include "connectionpage.php";
if(isset($_REQUEST['button']))
{
$in=$_REQUEST['textfield2'];
$ic=$_REQUEST['textfield3'];
$id=$_REQUEST['textarea'];
$filename=$_REQUEST["file"];
$sql=("insert into item values('$in','$id','$ic','$filename')");
mysql_query($sql);
}
if(isset($_GET['delimg']))
{
mysql_query("delete from item where productname='$_GET[delimg]'");
}

$result=mysql_query("select * from item");
?>
<form name="uploadimage"  action="additem.php" enctype="multipart/form-data">
<table width="90%" height="271" border="1" align="center">
<tr>
<td width="100">Product Name</td>
<td width="300">
<label for="textfield2"></label>
<input name="textfield2" type="text" id="textfield2" size="40"/></td></tr>
<tr><td width="100">Price</td>
<td width="300">
<label for="textfield3"></label>
<input name="textfield3" type="text" id="textfield3" size="40"/></td></tr>
<tr><td width="100">Product Details</td>
<td width="300">
<textarea area cols="30" name="textarea" id="textarea" style="height"="50"></textarea></td></tr>
<tr><td width="100">Upload </td>
<td width="300">
<label for="filename"></label>
<input name="file" type="file" id="file" size="40"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="button" id="b1" value="upload">
</td>
</tr>
</table>
</form>
<br>
<table width="90%" border="1" align="center">
<tr>
<th width="23%" scope="col">
<strong>Product Name</strong></th>
<th width="23%" scope="col">
<strong>ProductDetail</strong></th>
<th width="23%" scope="col">
<strong>Price</strong></th>
<th width="23%" scope="col">
<strong>Image</strong></th>

</tr>
<?php
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td> &nbsp;$row[0]</td>";
echo"<td> &nbsp;$row[1]</td>";
echo"<td> &nbsp;$row[2]</td>";
echo"<td> &nbsp;<img src='upload/$row[3]'width='220px' height='150px'></td>";

echo"</tr>";
}
?>


</table>
</body>
</html>
<!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
