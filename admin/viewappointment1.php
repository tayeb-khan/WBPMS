
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
					<center> <h2> HOme Appointment List </h2></center> <hr/>
							
<span style="float:right;"> <a href="addappointmnent.php" class="btn btn-primary"> Add new Appointment </a></span>							
								
								
														
								
							<table class="table">
  <thead>
      <tr>
        <th>SL</th>
        <th>Date </th>
		<th>Time </th>
        <th>First  name</th>
		<th>last name</th>
		<th>service</th>
		<th>mobile </th>
		<th>email </th>
		<th>Beautician name </th>
		<th>Address </th>
		
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							include"db.php";
							$product_query = "SELECT * FROM home_appoinment ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$date   = $row['date'];
											$fname = $row['first_name'];
											$lname = $row['last_name'];
											$service = $row['service'];
											$mobile = $row['mobile'];
											$email = $row['email'];
											$status = $row['status'];
											$time = $row['time'];
											$beautician = $row['beautician_name'];
											$address = $row['address'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $date; ?></td>
											<td><?php echo $time; ?></td>
											<td><?php echo $fname; ?></td>
											<td><?php echo $lname; ?></td>
											<td><?php echo $service; ?></td>
											
											<td><?php echo $mobile; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $beautician; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php 
											
											if($status==0)
											{
												echo" <a class='btn btn-default'>Pending<a/>";
											}
											if($status==1)
											{
												echo"<a class='btn btn-success'> confirm<a/>";
											}
											if($status==2)
											{
												echo" <a class='btn btn-primary'>Completed </a>";
											}


											?></td>
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="orderdelete" class="btn btn-danger" value="Delete">
								 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    Confirm
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item btn btn-defalut" href="edit_orders.php?pid=<?php echo $id;?>">Proccessing</a><br>
    <a class="dropdown-item btn btn-defalut" href="edit_orders.php?did=<?php echo $id;?>">Delivered</a><br>
	<a class="dropdown-item btn btn-defalut" href="order_invoice.php?Print_id=<?php echo $id;?>">Print</a>
  </div>
</div>
											</form>

                      

											
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
