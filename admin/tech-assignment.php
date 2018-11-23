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

<a class="disp" href="../index.php">Home</a>
<a class="disp" href="">Gallery</a>
<a class="disp" href="">Services</a>
<a class="disp" href="">Contact</a>
<a href="../logout.php" class="button disp"><span></span>Logout</a>

</div>
</section> 
  
<br><BR><BR>

<?php  
$sql = "SELECT * FROM `schedule_list`";
$q=mysqli_query($conn,$sql);
// $res=mysqli_fetch_assoc($q); 

echo "<center><table border='3'>
<tr style=' color:teal;  font-size:27px;'>
<th>NAME</th>
<th>CAR YEAR</th>
<th>CAR MAKE</th>
<th>CAR MODEL</th>
<th>PREF_APPOINTMENT DATE</th>
<th>PREF_APPOINTMENT TIME</th>
<th>SERVICE REQUESTED</th>
<th>TIME LOGGED</th>
<th>Technician Assigned</th>

</tr>";  
while($res=mysqli_fetch_assoc($q)){
echo "<tr style='font-weight:bold;'>";
echo "<td>" . $res['name'] . "</td>";
echo "<td>" . $res['year'] . "</td>";
echo "<td>" . $res['make'] . "</td>";
echo "<td>" . $res['model'] . "</td>";
echo "<td>" . $res['pref_appoint_date'] . "</td>";
echo "<td>" . $res['pref_appoint_time'] . "</td>";
echo "<td>" . $res['service_requested'] . "</td>";
echo "<td>" . $res['time_of_request'] . "</td>"; 
echo "<td>";
if($res['assigned_status'] == "0") { ?> 
<form method="POST" action="../submit1.php?id=<?php echo $res['sch_id'];?>">
<select name="techass"><?php 
$sqle = "SELECT * FROM `technician_list`";
$qe=mysqli_query($conn,$sqle);
    while($rest=mysqli_fetch_assoc($qe)){
      echo "<option>". $rest['tech_name']. "</option>";
    }?>
  </select>
  <button name="asstech">Assign</button>
</form><?php
} 
else{ 
   echo $res['technician_assigned'];
}

echo "</td>" ;
echo "</tr>"; 
} 





// $sql = "SELECT * FROM `technician_list`";
// $q= mysqli_query($conn,$sql) or die("cant do");


// echo "<center><table border='2' style=' border-radius:'10px';'>
// <tr style='color:teal; font-size:30px;'>

// <th>TECHNICIAN NAME</th>
// <th>USERNAME</th>
// <th>PASSWORD</th>

// </tr>";

// while($res=mysqli_fetch_assoc($q)){
// echo "<tr>";
// echo "<td>" . $res['tech_name'] . "</td>";
// echo "<td>" . $res['tech_user'] . "</td>";
// echo "<td>" . $res['tech_pass'] . "</td>"; 
// echo "</tr>"; 
// } 

echo "</table>";
echo "</center>";

?>  

</body>
</html>