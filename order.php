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
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="feedback.html">feedback</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->


<html>
<?php
include "connectionpage.php";
if(isset($_GET['order']))
{

$q=mysql_query("select * from  item where productname='$_GET[order]'");
$row=mysql_fetch_array($q);

}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method="POST" action="order1.php">
<br><br>
<div class="top" style="position:absolute; margin-left:523;"><?php

echo " <img src='upload/$row[3]' width='320px' height='200px' border='10'>"; ?>
</div>
<table  border="0" style="width: auto; background:white; ">
<tr width="300px"  >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Product Name
</td>
<td>
<input type="text" name="t1" id="t1" value='<?php echo $row[0];?>'>
</td>
</tr>
<tr width="300px" >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Detail
</td>
<td>
<input type="text" name="t2" id="t2" value='<?php echo $row[1];?>'>
</td>
</tr>
<tr width="300px" >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Price
</td>
<td>
<input type="text" name="t3" id="t3" value='<?php echo $row[2];?>'>
</td>
</tr>
<tr width="300px" >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Name
</td>
<td>
<input type="text" name="t4" id="t4">
</td>
</tr>
<tr width="300px" >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Address
</td>
<td>
<input type="text" name="t5" id="t5">
</td>
</tr>
<tr width="300px" >
<td width="150px">
&nbsp;&nbsp;&nbsp;&nbsp;Contact
</td>
<td>
<input type="text" name="t6" id="t6">
</td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="template-btn mt-3" value="order">
&nbsp;&nbsp;<input type="reset"  class="template-btn mt-3" value="reset">
&nbsp;&nbsp;<input type="button" class="template-btn mt-3" value="cancel"><br><BR>



</form>
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
