
<?php 
require("../connect.php");
?>
<html>
<head>
<title> Car Repair </title> 
<meta name="viewport" content="width=device-width, initial-scale=1">



<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet"/>
    
<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css"/>  

<!--Slideshow--> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<link rel="stylesheet" href="../css/main.css"/>   

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />  


</head>

<body style="font-family: 'Open Sans Condensed', sans-serif;"> 
<div class="navpdiv"> 

<div class="pull-left">
<a class="navbarlnkimg" href="index.php"><img src="../img/logo.JPG"/><strong>CARREPAIR</strong></a>
</div> 

<div class="rightdiv">   
<b>Support</b>:admin@carrepair.com   
</div>

</div> 
<br> 
<div>
<br>
</div>
</br>
<section class="menu-section"> 
<div class="menu"> 

<a class="disp" href="index.php">Home</a>
<a class="disp" href="">Gallery</a>
<a class="disp" href="">Services</a>
<a class="disp" href="">Contact</a>
<a href="../logout.php" class="button disp"><span></span>Logout</a>

</div>
</section> 
  
<br><BR><BR>
<center>
<?php
$sql = "SELECT * FROM `repaired_cars`";
$q=mysqli_query($conn,$sql);

echo "<center><table border='3'>
<tr style=' color:teal; font-size:27px;'>
<th>TRANSACTION ID</th>
<th>CAR MAKE</th>
<th>CAR MODEL</th>
<th>CAR EDITION</th>
<th>STATUS</th>

</tr>";  
while($res=mysqli_fetch_assoc($q)){
echo "<tr style='font-weight:bold;'>";
echo "<td>" . $res['trans_id'] . "</td>";
echo "<td>" . $res['make'] . "</td>";
echo "<td>" . $res['model'] . "</td>";
echo "<td>" . $res['year'] . "</td>";
echo "<td>";?> 
<center><img src="../img/completed.png"/></center>
<?php 
echo "</td>";
echo "</tr>";
}
?>

</center>
</body>
</html>
