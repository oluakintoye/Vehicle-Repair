<?php
session_start();
include("connect.php");
include("genpage1.php");
?>

<body style="font-family:'Open Sans Condensed', sans-serif;">
<center> 
<h2><strong><?php echo "Welcome ". $_SESSION['tech_name']; ?></strong></h2>
<div class="container"> 
<div class="row"> 
        <div class="col-md-3"> 
            <div class="sect" style="border-radius:15px;">
            <div class="thumbnail">
	      <img src="img/todo.jpg"/>
	        </div>
        <a href="tech/assigned-task.php" style="text-decoration:none";><h3 class="fnt">Assigned Tasks</h3></a>
        </div>
        </div>
        
        <div class="col-md-3"> 
            <div class="sect" style="border-radius:15px;">
            <div class="thumbnail">
	      <img src="img/todo1.jpg"/>
	        </div>
            <a href="tech/completed-task.php?id=<?php echo $cust_id= $_REQUEST['id']; ?>" style="text-decoration:none";><h3 class="fnt">Completed Tasks</h3></a>
        </div>
        </div>  
        
                <div class="col-md-3" > 
            <div class="sect" style="border-radius:15px;">
            <div class="thumbnail">
	      <img src="img/imagel.jpg"/>
	        </div>
            <a href="tech/.php.php?id=<?php echo $cust_id= $_REQUEST['id']; ?>" style="text-decoration:none";><h3 class="fnt">Message Customers</h3></a>
        </div>
        </div>
        
        
                <div class="col-md-3"> 
            <div class="sect" style="border-radius:15px;">
            <div class="thumbnail">
	      <img src="img/imagep.jpg"/>
	        </div>
            <a href="tech/messages.php?id=<?php echo $cust_id= $_REQUEST['id']; ?>" style="text-decoration:none";><h3 class="fnt">Inbox</h3></a>
        </div>
        </div>


</div>
</div>
</center></body>
//<?php 
//echo "Welcome ". $_SESSION['tech_name']. ", Check the AutoMobile You've Been Assigned to."; 
//
//$sn = $_SESSION['tech_name'];
//$sql="SELECT * FROM `carrepair` where `technicianassigned`='$sn'";
//$qs=mysqli_query($conn,$sql);
//$view=mysqli_fetch_assoc($qs);
//
//
//?>
//<hr>
//<script>
//function confirmcomp(){ 
//    var c= confirm("By Clicking Ok, You are Confirming Repairs have been made to the car");
//    if(c==true){ 
//         window.location="submit1.php?id=<?php echo $view['id']; ?>";
//    } 
//    else{ 
//         window.location="techpg.php"; 
//    }
//}
//</script>
//<?php
//echo "<li>"." ". $view['carmake'] ." ". $view['carmodel'] ." ". $view['vin'] ." ". $view['licenseno'] ." ". $view['cardesc'] ." ". "<button name='carcomp' onclick='confirmcomp()'>" ."<i class='fa fa-check' aria-hidden='true'>". "</i>"."</button>" . "</li>".'<br>';
//?>  

//<a href="logout.php">Logout</a> 