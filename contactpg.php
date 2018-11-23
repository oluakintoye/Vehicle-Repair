<?php
if(isset($_POST['contact'])){ 
    $contactb = $_REQUEST['id']; ?> 
<div>
<h1> Customer's INVOICE</h1> 
<form method="POST" action="submit1.php?id= <?php echo $contactb;?>"> 
<!--<textarea type="text" name="repdet" id=""></textarea>  -->
<textarea id="other" name="repdet" placeholder="" value=""></textarea><br /> 
<button name="subcarep"> Submit </button>
</form>
</div> 
<?php
} 
?>
