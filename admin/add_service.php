<!DOCTYPE HTML>
<html>
<head>
<title>PMS | Add Category</title>

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
				<div class="forms">
					<h3 class="title1">Add New Service Category</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Parlour Service Categories:</h4>
						</div>
						<div class="form-body">
							<form action="insert_services.php" method="post" enctype="multipart/form-data" >
								<p style="font-size:16px; color:red" align="center"></p>

								<label for="exampleInputEmail1">Category</label> 
								 <div class="form-group"> 
								 	<div class="select-wrap">
								        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
								            <select name="category" id="category" required="true" class="form-control">
								                <option value="">Select Category</option>
								                  <?php $query=mysqli_query($con,"select * from category");
						             				while($row=mysqli_fetch_array($query))
						              			{
						              			?>
								                       <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
								                       <?php } ?> 
								                      </select>
								    </div>
								</div>

							<div>
							 	<label for="exampleInputEmail1">Service Name</label> 
							 	<input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service Name" value="" required="true"> 
							 </div> 
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Price</label> 
							 	<input type="text" class="form-control" id="pzice" name="price" placeholder="Price" value="" required="true"> 
							 </div> 
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Discount(%)</label> 
							 	<input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" value="" required="true"> 
							 </div> 
							 
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Cost</label> 
							 	<input type="text" class="form-control" id="cost" name="cost" placeholder="Cost" value="" required="true"> 
							 </div>
							 
							 
							 
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Service Details</label> 
							 	<textarea type="text" class="form-control" id="details" name="details"   required>  </textarea>
							 </div>
							 
							 
							 	 
							 
							 
							 
							 
							 <div class="form-group"><label class="exampleInputEmail1">Image</label>
                                                <input type="file" name="image" class="form-control" placeholder="Image name">
                                            </div>
											
											
											
											
											
											
											<div class="form-group"><label class="col-sm-2 col-form-label"></label>
                                                <input type="submit" name="submit1" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" >
                                            </div>
											
											
												
    

                                            
										</form>
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
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
