<?php 
session_start();
include("connect.php");    
?>   

<?php
include("genpage1.php");

?>
<body style="font-family:'Open Sans Condensed', sans-serif;">
<center> 
<h3><strong> <?php echo "Welcome, " .$_SESSION['lastname']." ".$_SESSION['firstname'] . ". Please explore your page"; ?></strong></h3>
<div class="container"> 
<div class="row"> 
        <div class="col-md-3"> 
            <div class="sect">
            <div class="thumbnail">
	      <img src="img/schedule.PNG"/>
	        </div>
        <a href="#AppScreen" style="text-decoration:none";><h3 class="fnt">Book Schedule</h3></a>
        </div>
        </div>
        
        <div class="col-md-3"> 
            <div class="sect">
            <div class="thumbnail">
	      <img src="img/imagek.PNG"/>
	        </div>
            <a href="view-inbox.php?id=<?php echo $cust_id= $_REQUEST['id']; ?>" style="text-decoration:none";><h3 class="fnt">Messages</h3></a>
        </div>
        </div>

        <!--<div class="col-md-3">
            <div class="sect">
            <div class="thumbnail">
	    <img class="" src="img/.JPEG"/>
	        </div>
        </div>
        </div>

        <div class="col-md-3">
            <div class="sect">
            <div class="thumbnail">
	    <img src="img/"/>
	        </div>
        </div>
        </div>-->

</div>
</div>  
<!--<?php 
$repid=$_REQUEST['id']; ?>
<h4> Repair Cost Details</h4> <form method="POST" action="submit1.php?id=<?php echo $repid; ?>"> <button name="view" href="">View</button></form>-->
<!--// $l= $_SESSION['lastname'];
// $f= $_SESSION['firstname']; 

// $email=$_REQUEST('email');
// $sqlp = "SELECT * FROM `carrepair` where `email` = '$email'";
// $qp=mysqli_query($conn,$sqlp);
// $res=mysqli_fetch_assoc($qp);

// echo $id = $res['id'];

    // $sql="SELECT `repaircost` from `` where `id`=''";
    // $result=mysqli_query($conn,$sql);
    // header("Content-type:image/jpeg");
    // echo mysql_result($result,0);-->
</div>
 </center>  
</body>