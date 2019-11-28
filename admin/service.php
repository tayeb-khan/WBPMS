
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		<meta charset="utf-8" />


		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">


	</head>
	<body>
		<div id="app">
<?php include('include/sidebar.php');?>
			<div class="app-content">

						<?php include('include/header.php');?>

				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						
						<!-- end: PAGE TITLE -->
					<center> <h2> All Services </h2></center> <hr/>
								
						
					<button style="float:right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add new Service
</button>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
		<center>Add new Service</center>
		</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
												

							<form action="addservice.php" method="post">
								  <div class="form-group">
									<label for="exampleInputEmail1">Service name</label>
									<input type="text" name="service" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">category</label>
									
									
											<select name="category" class="form-control">
											  
											  
											  <?php
											  
											  $product_query = "SELECT * FROM category ";
												$run_query = mysqli_query($con,$product_query);
												if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											$id   = $row['id'];
											$catname   = $row['name'];
											
											?>
											  
											  
											  <option value="<?php echo $id;?>"><?php echo $catname;?></option>
											  
											  
											  <?php
										}
												}
											  ?>
											</select>
									
									
									
									
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Prize</label>
									<input type="text" name="prize" class="form-control" id="exampleInputEmail1" >
									
								  </div>
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
								  <input type="submit" class="btn btn-primary" value="submit" name="addservice">
							</form>
		  
		  
		  
		  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		
		
		<?php 
		
		
		if(isset($_POST["addservice"])){
			$name = $_POST["service"];
			$cate = $_POST["category"];
			$prize = $_POST["prize"];
		
		$sql = "INSERT INTO `services`
			(`service_name`, `category`, `prize`) 
			VALUES ('$name','$cate','$prize ')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
		}
		
		?>
		
		
		
		
		
		
      </div>
    </div>
  </div>
</div>
								
								
								
								
							<table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Service name</th>
        <th>category</th>
		<th>Discount</th>
		<th>prize</th>
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM services ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query)){
											$id   = $row['id'];
											$service   = $row['service_name'];
											$cate = $row['category'];
											$prize1 = $row['prize'];
											$dicount = $row['discount'];
											
											
											
											$dis = ($dicount*$prize1)/100;
											
											$prize = $prize1 - $dis;
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $id; ?></td>
											<td><?php echo $service; ?></td>
											<td>
											
											<?php
											
											if ($cate==1)
											{
												echo "Facial";
											}
											else if ($cate==2)
											{
												echo "Party Makeover";
											}
											else if ($cate==3)
											{
												echo "Hair cut";
											}											
										
											?>
											
											
											</td>
											<td><?php echo $dicount; ?>%</td>
											<td>
											<?php
											if($dis > 0)
												
												{ ?>
													
													<strike style="color:red;"> <?php echo $prize1; ?> </strike>Tk &nbsp
												 
													<b style="color:green;"> <?php echo $prize; ?> </b> Tk
													
												<?php
												}
												
												
												?>
												
											<?php
											if($dis == 0)
												
												{ ?>
													
													
												 
													<b style="color:green;"> <?php echo $prize; ?> </b> Tk
													
												<?php
												}
												
												
												?>
											
											
											
											</td>
											
											
											<td>
											<a class="btn btn-info"> Active </a></td>
											<td>
											<a href="insertpro.php?delid=<?php echo $id;?>"class="btn btn-danger"> Delete </a>
											<a href="edit.php?peid=<?php echo $id;?>"class="btn btn-success"> Edit </a>
											</td>
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

					
					

					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->

			<!-- start: SETTINGS -->
	
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
