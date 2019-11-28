<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || Manage Services</title>

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
					<h3 class="title1">Manage Services</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Update Service:</h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								<th>#</th> 
								<th>Service Name</th> 
								<th>Category</th>
								<th>Service Cost</th> 
								<th>Discount</th> 
								<th>Price</th> 
								<th>Image</th> 
								<th>Action</th> 
							</tr> 
						</thead> 
						<tbody>

							<?php
									$ret=mysqli_query($con,"select * from  services");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {

											$id   = $row['service_id'];
											$service_name   = $row['service_name'];
											$category_name = $row['category_name'];
											$service_price = $row['price'];
											$service_cost = $row['service_cost'];
											$discount = $row['discount'];
											$image = $row['image'];


									?>

										<tr>
											<th scope="row"><?php echo $cnt;?></th> 
											<td><?php echo $service_name; ?></td>
											<td><?php echo $category_name; ?></td>
											<td><?php echo $service_cost; ?> Tk</td>
											<td><?php echo $discount; ?> %</td>											
											<td>
											
											<?php 
											
											$disc = ($discount * $service_price) / 100;
											$price = $service_price - $disc;
											
											if($discount > 0)
											{ ?>
												<strike style="color:red;"><?php echo $service_price ;?> </strike> &nbsp <b style="color:green;"> <?php echo $price ;?> Tk </b>
										   <?php }
										
											 ?>
											 
											<?php 
											 
											 if($discount == 0)
											{ ?>
												<b style="color:green;"> <?php echo $price ;?> Tk </b>
										   <?php }
										
											 ?>
											
											
											
											</td>
											<td><img src="../images/<?php echo $image; ?>" style="height:80px;width:100px;"></td>
											
											
											<td>
											<a href="edit_service.php?editid=<?php echo $row['service_id'];?>">
												<img alt="Qries" src="images/edit1.png" width="30px" height="30px">
											</a>||
										    <a href="delete_service.php?delId=<?php echo $row['service_id'];?>">
										         <img alt="Qries" src="images/delete1.jpg" width=40px" height="30px">
										    </a>||
										    <a href="view_service.php?viewid=<?php echo $row['service_id'];?>">
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
