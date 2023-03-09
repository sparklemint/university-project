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
<head>
<title>listing all rows and fields in a table</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "connectionpage.php";
$result=mysql_query("select * from order1 ",$link);
$a_rows=mysql_num_rows($result);

print"<table border=1>";
print"<tr align=center><td>productname</td><td>detail</td><td>price</td><td>name</td><td>address</td><td>contact</td><td>date</td></tr>";
while($a_row=mysql_fetch_array($result)){
print"<TR>";
print"<Td align=center>".$a_row[0]."</TD>";
print"<Td  width=150 align=center>".$a_row[1]."</TD>";
print"<Td  width=150 align=center>".$a_row[2]."</TD>";
print"<Td  width=150 align=center>".$a_row[3]."</TD>";
print"<Td  width=150 align=center>".$a_row[4]."</TD>";
print"<Td  width=150 align=center>".$a_row[5]."</TD>";
print"<Td  width=150 align=center>".$a_row[6]."</TD>";
print"<TR>";
}
print"</table>\n";
mysql_close($link);
?>
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
