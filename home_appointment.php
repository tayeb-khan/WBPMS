<?php
session_start();
error_reporting(0);
include('db.php');
if (!isset( $_SESSION['cusid'])) {


	?>
<script>

  alert('Please Login to Place an Appointment');
window.location="login.php";
</script>
<?php
}
include('header.php');

?>

	<br><br>
<div class="container">
	<div class="row">
		
		<div class="col-md-5" style="padding:0px;">
			<div class="app">
			<img src="img/hiclipart.com-id_yddch.png">
		   </div>
			
		</div>
		
		
		
		
		<?php
		
		if(!isset($_GET["id"]))
			
			{  ?>
				
				
			<div class="col-md-7" style="padding:0px;">
		
			<div class="box1">
	       <h2>Make a Home Appointment</h2>
		   
		
		  <form action="success.php" method="post"> 
		 
		 <label style="color:#fff;">Select a service</label>
		   <div class="inputbox">
			
			
			<select name="service">
			  
			  
			  <?php 
			    
						$product_query = "SELECT service_name,price FROM services ";
						$run_query = mysqli_query($con,$product_query);
				if(mysqli_num_rows($run_query) > 0){
				
				while($row = mysqli_fetch_array($run_query)){
					$serv_id    = $row['service_id'];
					$service  = $row['service_name'];
					$price  = $row['price'];
			
			?>
				
				
			 
			  
			  <option  value="<?php echo $service ;?>"><?php echo $service ;?> </option>
			  
			  
	<?php } }?>
			  
			</select>
			<input type="hidden" name="serviceid" value="<?php echo $serv_id ;?>" required="">
			
			 <input type="hidden" value="<?php echo $price ;?>" name="price">
			</div>
		<div class="inputbox">
			<input type="date" name="date" required="">
			
		</div>
		
		<div class="inputbox">
			<input type="time" name="time" required="">
			
		</div>
		
			
			 <input type="hidden" value="<?php echo $price ;?>" name="price">



		<div class="inputbox">
			<input type="text" name="address" required="">
			<label>Address</label>
			
		</div>
		
		<div class="inputbox">
		<label>payment type</label>
		</div>
		<ul class="list-group">
				   
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="Bkash">
                                   Bkash
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="cash on">
                                    Cash By Hand
                                </label>
                            </div>
                        </li>
                       
                      
                       
                    </ul>		
			
			<input type="submit" name="submit2" value="submit">
			
		</div>
		
	</form>
	<?php 
	
	?>
	
	
	
	
</div>

  
		  
		</div>
			
		<?php	}
		
		
		?>
		
		
		
	</div>
</div>




				
							
							
<br> <br> <br><br>


<?php include"footer.php";?>