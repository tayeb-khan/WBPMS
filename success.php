<?php 


include"header.php";?>


	<?php 






if(!isset($_SESSION['cusid'])) {
	
?>

														<script type="text/javascript">
<!--
function Redirect() {
window.location="login.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 0;
//-->
</script>
<?php
	
} 

?>



<div class="container">


		<div class="row">
		
		
		
		
		
		
		
		
		

<?php 
							if(isset($_POST["submit"])){
								
															
								$f_service = $_POST["service"];
								
								
								$date = $_POST["date"];
								
								
								$uid = $_SESSION['cusid'];
								$time = $_POST["time"];
								
								$type = $_POST["optionsRadios"];
								
								$name = $_SESSION['cusname'];
	
								$email = $_SESSION['email'];

								$mobile = $_SESSION['phone'];
	
	$name1 = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
								
								
								
			if(!preg_match($name1,$name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $name is not valid..!</b>
			</div>
		";
		exit();
	}
	
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}					
								
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}							
	
else

	{
		
	
								
								
								
								
								
								
						        
							$sql = "INSERT INTO appointment (name,service,date,mobile,email,user_id,time,type,appointment_type) VALUES ('$name','$f_service','$date','$mobile','$email','$uid','$time','$type','0')";	
							
	                            $run_query = mysqli_query($con,$sql);	
								
								if(mysqli_query($con, $sql)){
    
	
	?>

<center>
		<h2> Thank you. Your appoinment is under review. We will contact with you later. Keep an eye to see your appointment status on your profile.</h2>
		<br/>
		<a href="order_invoice1.php?Print_id= " class="btn btn-success">View Invoice</a>
		
		</center>

<?php
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

		

 
// Close connection
mysqli_close($con);



	}
							}
							
							
							?>
							
							
							
							
							
							
							
							
							
							<?php 
							if(isset($_POST["submit1"])){
								
								
								$f_service = $_POST["service"];
								
								
								$date = $_POST["date"];								
								
								$uid = $_SESSION['cusid'];
								$time = $_POST["time"];
								
								$type = $_POST["optionsRadios"];
								
								$name = $_SESSION['cusname'];
	
								$email = $_SESSION['email'];

								$mobile = $_SESSION['phone'];
	
	$name1 = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
								
								
								
			if(!preg_match($name1,$name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $name is not valid..!</b>
			</div>
		";
		exit();
	}
	
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}					
								
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}							
	
else

	{
		
	
								
								
								
								
								
								
						        
							$sql = "INSERT INTO appointment (name,service,date,mobile,email,user_id,time,type,appointment_type) VALUES ('$name','$f_service','$date','$mobile','$email','$uid','$time','$type', '0')";	
							
	                            $run_query = mysqli_query($con,$sql);	
								
								if(mysqli_query($con, $sql)){
	
	?>

          <center>
		<h2> Thank you. Your appoinment is under review. We will contact with you later. Keep an eye to see your appointment status on your profile.</h2>
		<br/>
		<a href="order_invoice1.php?Print_id= " class="btn btn-success">View Invoice</a>
		
		</center>

<?php
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

								

 
// Close connection
mysqli_close($con);



	}

							}
							
							
							?>
		
		
		
		<?php 
							if(isset($_POST["submit2"])){
								
								
							
								
								
								
								$adress = $_POST["address"];
								$serviceid = $_POST["serviceid"];
							$f_service = $_POST["service"];
								
								
								$date = $_POST["date"];
								
								
								$uid = $_SESSION['cusid'];
								$time = $_POST["time"];
								
								$type = $_POST["optionsRadios"];
								
								$name = $_SESSION['cusname'];
	
								$email = $_SESSION['email'];

								$mobile = $_SESSION['phone'];
	
	$name1 = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";	
								
								
								
	if(!preg_match($name1,$name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>No</b>
			</div>
		";
		exit();
	}

	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This $email is not valid..!</b>
			</div>
		";
		exit();
	}					
								
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11 or strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}							
	
else

	{							
								
								
								
								
								
								
								
								
						        
							$sql = "INSERT INTO appointment (name,service,date,mobile,email,user_id,time,type,appointment_type, Address) VALUES ('$name','$f_service','$date','$mobile','$email','$uid','$time','$type','1','$adress')";	
						
	                            $run_query = mysqli_query($con,$sql);	
								
								if(mysqli_query($con, $sql)){
    ?>

<center>
		<h2> Thank you. Your appoinment is under review. We will contact with you later. Keep an eye to see your appointment status on your profile.</h2>
		<br/>
		<a href="order_invoice1.php?Print_id= " class="btn btn-success">View Invoice</a>
		
		</center>

<?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

	}}
							
							
							
							?>
		
		
		
		
		
		
		
		
		
		
		
			
			
			  
			  
			  	
							

					   
			

		</div>

         </div>

</div>

	



<?php include"footer.php";?>