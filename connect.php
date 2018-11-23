<?php

$dbserver="localhost";
$dbhost="root";
$dbpassword="";

$dbname="car_repair";

$conn= mysqli_connect($dbserver,$dbhost,$dbpassword) or die("can't connect to database". mysql_error());
mysqli_select_db($conn,$dbname) or die("can't connect to database".mysql_error());

?> 


