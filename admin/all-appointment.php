
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || All Appointment</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">All Appointment</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>All Appointments List:</h4>
						<table class="table table-bordered">
  <thead>
      <tr>
        <th>SL</th>
        <th>Date </th>
		<th>Time </th>
		<th>Appointment Type</th>
        <th>Name</th>
		<th>service</th>
		<th>mobile </th>
		<th>email </th>
		
		
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							$product_query = "SELECT * FROM appointment   ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$date   = $row['date'];
											$appointment_type = $row['appointment_type'];
											$name = $row['name'];
											$service = $row['service'];
											$mobile = $row['mobile'];
											$email = $row['email'];
											$status = $row['status'];
											$time = $row['time'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo date("F d, Y ", strtotime($date)); ?></td>
											<td><?php echo date(" h:i A", strtotime($time)); ?></td>
											<td><?php 
											if($appointment_type==0)
											{
												echo"Parlour Service";
											}
											if($appointment_type==1)
											{
												echo"Home Service";
											}
											?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $service; ?></td>
											
											<td><?php echo $mobile; ?></td>
											<td><?php echo $email; ?></td>
											
											<td><?php 
											
											if($status==0)
											{
												echo" <a class='btn btn-default'>Pending<a/>";
											}
											if($status==1)
											{
												echo"<a class='btn btn-success'>Accepted<a/>";
											}
											if($status==2)
											{
												echo" <a class='btn btn-danger'>Rejected</a>";
											}
											if($status==3)
											{
												echo" <a class='btn btn-primary'>Completed</a>";
											}
											if($status==4)
											{
												echo" <a class='btn btn-danger'>Cancelled</a>";
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
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
