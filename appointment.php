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
//header('location:login.php');

}
	 
	  include "header.php";
	  ?>
	
<div class="container">
	<div class="row">
		
		<div class="col-md-5" style="padding:0px;">
			<div class="app">
			<img src="img/hiclipart.com-id_dxzqn.png">
		   </div>
			
		</div>
		
		
		<?php
		
		if(isset($_GET["id"]))
			
			{ 
				$id =  $_GET["id"];
			?>
				
				
			<div class="col-md-7" style="padding:0px;">
		
			<div class="box1">
	       <h2>Make an Appointment</h2>
		   
		
		  <form action="success.php" method="post"> 
		 

		 <label style="color:#fff;">Your selected service</label>
		   <div class="inputbox">
			
			
			<select name="service">
			  
			  
			  <?php 
			    
						$product_query = "SELECT * FROM services where service_id = $id ";
						$run_query = mysqli_query($con,$product_query);
				if(mysqli_num_rows($run_query) > 0){
				
				while($row = mysqli_fetch_array($run_query)){
					$serv_id    = $row['id'];
					$service  = $row['service_name'];
					$price1 = $row['price'];
											$dicount = $row['discount'];
											
											
											
											$dis = ($dicount*$price1)/100;
											
											$price = $price1 - $dis;
			
			?>
				
				
			  
			  
			  <option  value="<?php echo $service ;?>"><?php  echo $service ;?> &nbsp &nbsp &nbsp price (
			  
			  
			  
			 <?php
											if($dis > 0)
												
												{ ?>
													
													<strike style="color:red;"> <?php echo $price; ?> </strike>Tk with <?php echo $dicount; ?>% discount
												 
													
													
												<?php
												}
												
												
												?>
												
											<?php
											if($dis == 0)
												
												{ ?>
													
													
												 
													<b style="color:green;"> <?php echo $price1; ?> </b> Tk
													
												<?php
												}
												
												
												?>
			  
			  
			  )</option>
			  
			  
	<?php } }?>
			  
			</select>
			
			
			</div>
			
			
			
			 <?php
											if($dis > 0)
												
												{ ?>
													
													
												 <input type="hidden" value="<?php echo $price ;?>" name="price">
													
													
												<?php
												}
												
												
												?>
												
											<?php
											if($dis == 0)
												
												{ ?>
													
													
												 
												 <input type="hidden" value="<?php echo $price1 ;?>" name="price">
													
												<?php
												}
												
												
												?>
			
			
			
			
			
			
			<input type="hidden" value="<?php echo $service ;?>" name="price">
			
			
		<div class="inputbox">
			<input type="date" name="date" required="">
			<label></label>
			
		</div>
		<div class="inputbox">
			<input type="time" name="time" required="">
			
			
		</div>
		
		<div class="inputbox">
		<label>Payment type</label>
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
                                    Cash On delivery
                                </label>
                            </div>
                        </li>
                       
                      
                       
                    </ul>
		
		
		
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
	
	?>
	
	
	
	
</div>




							


          
		  
		  
		</div>
			
		<?php	}
		
		
		?>
		
		
		
		
		<?php
		
		if(!isset($_GET["id"]))
			
			{  ?>
				
				
			<div class="col-md-7" style="padding:0px;">
		
			<div class="box1">
	       <h2>Make an Appointment</h2>
		   
		
		  <form action="success.php" method="post"> 
		 
		 <label style="color:#fff;">Select a service</label>
		   <div class="inputbox">
			
			
			<select name="service">
			  
			  
			  <?php 
			    
						$product_query = "SELECT * FROM services";
						$run_query = mysqli_query($con,$product_query);
				if(mysqli_num_rows($run_query) > 0){
				
				while($row = mysqli_fetch_array($run_query)){
					$serv_id    = $row['service_id'];
					$service  = $row['service_name'];
					$price  = $row['price'];
			
			?>
				
				
			  Price
			  
			  <option  value="<?php echo $service ;?>"><?php echo $service ;?> </option>
			  
			  
	<?php } }?>
			  
			
			
			 <input type="hidden" value="<?php echo $price ;?>" name="price">
			 </select>
			</div>
		<div class="inputbox">
			<input type="date" name="date" required="">
			<label></label>
			
		</div>
		
		<div class="inputbox">
			<input type="time" name="time" required="">
			
		</div>
		
		<div class="inputbox">
		<label>Payment type</label>
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
                                    Cash On delivery
                                </label>
                            </div>
                        </li>
                       
                      
                       
                    </ul>
		
		
		<input type="submit" name="submit1" value="submit">
	</form>
	<?php 
	
	?>
	
	
	
	
</div>




							


          
		  
		  
		</div>
			
		<?php	}
		
		
		?>
		
		
		
		
		
		
		
		
		
		
		
	</div>
</div>










  <?php include "footer.php";?>