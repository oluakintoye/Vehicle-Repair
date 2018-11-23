<?php 
session_start();
include("connect.php");
include("genpage1.php");
?>

<center> 
<h1><b> Welcome Admin </b></h1>  

<div class="container"> 
<div class="row"> 
        <div class="col-md-4"> 
            <div class="" style="border-radius:15px;">
            <div class="thumbnail">
	      <img src="img/reg-tech1.png"/>
	        </div>
        <a href="admin/reg-tech.php" style="text-decoration:none";><h3 class="fnt">Register Technician</h3></a>
        </div>
        </div> 
          
        
         <div class="col-md-4"> 
            <div class="adsect">
            <div class="thumbnail">
	      <img src="img/assign2.png"/>
	        </div>
        <a href="admin/tech-assignment.php" style="text-decoration:none";><h3 class="fnt">Technician Assignment</h3></a>
        </div>
        </div>
        
        
        <div class="col-md-4"> 
            <div class="adsect">
            <div class="thumbnail">
	      <img src="img/delete.jpg"/>
	        </div>
            <a href="admin/delete-tech.php" style="text-decoration:none";><h3 class="fnt">Delete Technician</h3></a>
        </div>
        </div>   
        
        
         <div class="col-md-4"> 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/changepass.jpg"/>
	        </div>
        <a href="admin/change-adpass.php" style="text-decoration:none";><h3 class="fnt">Change Password</h3></a>
        </div>
        </div>   
        
        
           
        
         <div class="col-md-4"> 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/schedule1.png"/>
	        </div>
        <a href="admin/view-schedule.php" style="text-decoration:none";><h3 class="fnt">Schedule</h3></a>
        </div>
        </div>
        
         <div class="col-md-4"> 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/vehinfo.jpg"/>
	        </div>
        <a href="admin/vehicle-info.php" style="text-decoration:none";><h3 class="fnt">Vehicle Information (Scheduling)</h3></a>
        </div>
        </div> 
        
          
        
        
         <div class="col-md-4"> 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/transaction.jpg"/>
	        </div>
        <a href="admin/completed-transaction.php" style="text-decoration:none";><h3 class="fnt"> Completed Transactions</h3></a>
        </div>
        </div>   
        
            <div class="col-md-4"> 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/cd.PNG"/>
	        </div>
        <a href="admin/view_del_completed_schedules.php" style="text-decoration:none";><h3 class="fnt">View & Delete Completed Schedules</h3></a>
        </div>
        </div>

         <div class="col-md-4" > 
            <div class="adsect" >
            <div class="thumbnail">
	      <img src="img/cntcust.jpg"/>
	        </div>
        <a href="" style="text-decoration:none";><h3 class="fnt">Contact Customer</h3></a>
        </div>
        </div>
        
        
        
</div>
</div>

</center> 


<!--<div><h1>View Customers Repair Details</h1></div>
<?php
$sql = "SELECT * FROM `carrepair`";
$q=mysqli_query($conn,$sql);
// $res=mysqli_fetch_assoc($q); 

echo "<center><table border='1'>
<tr>
<th>NAME</th>
<th>PHONE NO</th>
<th>EMAIL</th>
<th>CAR MAKE</th>
<th>CAR MODEL</th>
<th>VECH. IDENT.NUM</th>
<th>LICENSE NUMBER</th>
<th>CAR DESCRIPTION</th>
<th>Date Received</th>
<th><center>Delete</center></th>
<th>Assign Technician</th>

</tr>";  
while($res=mysqli_fetch_assoc($q)){
echo "<tr>";
echo "<td>" . $res['name'] . "</td>";
echo "<td>" . $res['phoneno'] . "</td>";
echo "<td>" . $res['email'] . "</td>";
echo "<td>" . $res['carmake'] . "</td>";
echo "<td>" . $res['carmodel'] . "</td>";
echo "<td>" . $res['vin'] . "</td>";
echo "<td>" . $res['licenseno'] . "</td>";
echo "<td>" . $res['cardesc'] . "</td>";
echo "<td>" . $res['date'] . "</td>"; 
echo "<td>" ?>
<form method="POST" action="submit1.php?id=<?php echo $res['id'];?>">
<button name ="delete" value="delete" href="">delete</button>
</form> 
<form method="POST" action="contactpg.php?id=<?php echo $res['id'];?>">
<button name ="contact" value="contact" href="">contact</button>
</form>
<?php echo"</td>"; 

echo "<td>";
if(!isset($_POST['asstech'])) { ?> 
<form method="POST" action="submit1.php?id=<?php echo $res['id'];?>">
<select name="techass"><?php 
$sqle = "SELECT * FROM `technicianlist` where `assignment_status`='0'";
$qe=mysqli_query($conn,$sqle);
    while($rest=mysqli_fetch_assoc($qe)){
      echo "<option>". $rest['techname']. "</option>";
    }?>
  </select>
  <button name="asstech">Assign</button>
</form><?php
} 
else{ 
   echo $res['technicianassigned'];
}

echo "</td>" ;
echo "</tr>"; 
} 

echo "</table>";
echo "</center>";

?>  

<br> 
<center><h3> List Of Technicians </h3>
<div> 
<?php  

//   $sql ="SELECT * from `technicianlist`";
//   $q=mysqli_query($conn,$sql) or die("can't do");

//   while($list=mysqli_fetch_assoc($q)){ 
// ?> 
    <!--<?php  
    //  echo '<li>' . $list['techname']; ?> 
     <form method="POST" action="submit1.php?id=<?php echo $list['id']; ?>"> <button name="deletetech">Delete<i class="fa fa-trash" aria-hidden="true" ></i></button></li> </form>

  <?php  
// }
?>
</div>
</center>  

<center><div>
<h3> Search For Customer </h3>
 <form method="POST" action="" > <input type="text" name="searchc"/> <button name="search" href=""> Search </button> </form>



</div></center>
<a href="logout.php">Logout</a> -->-->












