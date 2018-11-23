

<?php
if(!isset($_SESSION['firstname'])) { ?>
 <div id="">
     <div id="login" class="">
     <form  method="POST" action="submit1.php" autocomplete="on"> 
     <h1>Log in</h1> 
     <p> 
        <label for="email" class="uname" data-icon="u" > Your email</label>
        <input id="email" name="cust_email" required="required" type="text" placeholder=""/>
    </p>
    <p> 
         <label for="password" class="" data-icon="p"> Your password </label>
        <input id="password" name="cust_password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
    </p>
    <p class=""> 
	    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
	    <label for="loginkeeping">Keep me logged in</label>
	</p>
    <p class="login button"> 
         <input type="submit" name="submitclogin" value="Login" /> 
	</p> 
<?php
    if(isset($_SESSION['failedlogin'])){ ?>
        <div> <?php
            echo $_SESSION['failedlogin']; 
            unset($_SESSION['failedlogin']);?>
            </div> 
   <?php }  ?>   <p class="">
			Not a Registered User yet ?
	<a href="register.php" class="">Join us</a>
	</p>
    </form>
     </div>  
<?php } 
else{  
    
     echo "Welcome back " .$_SESSION['lastname']." ".$_SESSION['firstname'];
    echo " <script>setTimeout('window.location.href =\"custpg.php\"',300)</script>"; 
}?>
<!--<a href="logout.php">logout</a>-->