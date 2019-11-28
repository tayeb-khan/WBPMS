
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
					<center> <h2> Add new Services </h2></center> <hr/>
					
					
					
					
					
					<div class="container">
							<div class="modal-body">
												

							<form action="" method="post">
								  <div class="form-group">
									<label for="exampleInputEmail1">Service name</label>
									<input type="text" name="service" class="form-control"  >
									
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">category</label>
									
									
											<select name="category" class="form-control">
											  <option selected>Choose category</option>
											  
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
								  <div class="form-group">
									<label for="exampleInputEmail1">Discount amount</label>
									<input type="text" name="discount" class="form-control" id="exampleInputEmail1" >
									
								  </div>
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
								  <input type="submit" class="btn btn-primary" value="submit" name="addservice">
							</form>
		  
		  
		  
		  
      </div>
								
		
		
		
		
		
		<?php 
		
		
		if(isset($_POST["addservice"])){
			$name = $_POST["service"];
			$cate = $_POST["category"];
			$prize = $_POST["prize"];
			$discount = $_POST["discount"];
		
		$sql = "INSERT INTO `services`
			(`service_name`, `category`, `prize`, `discount`) 
			VALUES ('$name','$cate','$prize ','$discount ')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your service is Added Successfully..!</b>
					</div>
				";
				
				
				?>
				
				<script type="text/javascript">
<!--
function Redirect() {
window.location="service.php";
}
document.write("<center>You will be redirected to main page in 3 sec.</center>");
setTimeout('Redirect()', 3000);
//-->
</script>
				
				
				
				<?php
			}
		}
		
		?>

					
					

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
