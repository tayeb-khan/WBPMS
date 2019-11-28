<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || Manage Beautician</title>

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
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Manage Beautician</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Update Beautician:</h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								<th>#</th> 
								<th>Beautician Name</th> 
								<th>Email</th>
								<th>Mobile No</th> 
								<th>Expert Area</th>
								<!-- <th>Off Day</th>   -->
								<!-- <th>Deauty Starts on</th> 
								<th>Deauty Ends on</th> 
								<th>Basic Salary</th>  -->
								<th>Action</th>
							</tr> 
						</thead> 
						<tbody>

							<?php
									$ret=mysqli_query($con,"select * from  beautician");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {

											$beauty_id   = $row['beauty_id'];
											$name   = $row['name'];
											$email = $row['email'];
											$mobile=$row['mobile'];
											$expert_area = $row['expert_area'];
											$deauty_starts_on = $row['deauty_starts_on'];
											$deauty_ends_on = $row['deauty_ends_on'];
											$monthly_salary = $row['monthly_salary'];
											$off_day = $row['off_day'];
	

									?>

										<tr>
											<th scope="row"><?php echo $cnt;?></th> 
											<td><?php echo $name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $expert_area; ?></td>
											<!-- <td><?php echo $off_day; ?></td>											
											<td>
											<?php echo $deauty_starts_on; ?>
											</td>
											<td><?php echo $deauty_ends_on; ?></td>
											<td><?php echo $monthly_salary; ?></td> -->
											
											
											<td>
											<a href="edit_beautician.php?editid=<?php echo $row['beauty_id'];?>">
												<img alt="Qries" src="images/edit1.png" width="30px" height="30px">
											</a>||
										    <a href="delete_beautician.php?delId=<?php echo $row['beauty_id'];?>">
										         <img alt="Qries" src="images/delete1.jpg" width=40px" height="30px">
										    </a>||
										    <a href="view_beautician.php?viewid=<?php echo $row['beauty_id'];?>">
										    	<img alt="Qries" src="images/details.png" width=27px" height="30px">
										    </a>
										</form>
											</td>
										  </tr>   <?php 
									$cnt=$cnt+1;
									}?>

							
				
					
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

