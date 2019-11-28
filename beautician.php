<?php include "header.php";?>
<div class="bg1">
	<img src="img/slider/bg1.jpg">
</div>
	
		
		
		<br> 		<br>
<div class="h1"><center><h1 style="color:#a51349"> Our Beauticians</h1></center></div><br><br><br>
		<div class="container">
			<div class="row">
				
				
						
							<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Beautician  Name</th>
        <th>Email</th>
		<th>Mobile</th>
		<th>Expert area</th>
		<th>Serving Time</th>
		
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM beautician ";
							$run_query = mysqli_query($con,$product_query);
							$sl=0;
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['beauty_id'];
											$name   = $row['name'];
											$email = $row['email'];
											$mobile = $row['mobile'];
											$expert = $row['expert_area'];
											$from = $row['deauty_starts_on'];
											$to = $row['deauty_ends_on'];
											
											?>
							
							
							
							
										  <tr>
											<td><b><?php echo $sl; ?></td>
											<td><?php echo $name; ?></td>
											
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $expert; ?></td>
											<td><?php echo $from; ?> to <?php echo $to; ?> </td>
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

			   
			    
				
			</div>
			
		</div>
		
		
		<?php include"footer.php";?>