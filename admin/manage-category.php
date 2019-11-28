<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || Manage Categories</title>

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
					<h3 class="title1">Manage Categories</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Update Category:</h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								<th>#</th> 
								<th>Category Name</th> 
								<!-- <th>Service Price</th> 
								<th>Creation Date</th> -->
								<th>Action</th> 
							</tr> 
						</thead> 
						<tbody>
<?php
$ret=mysqli_query($con,"select *from  category");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['category_name'];?></td> 
						 	<td>
						 		<a href="edit-category.php?editid=<?php echo $row['category_id'];?>">
									<img alt="Qries" src="images/edit1.png" width=30px" height="30px">
								</a>||
								<a href="delete_category.php?editid=<?php echo $row['category_id'];?>">
									<img alt="Qries" src="images/delete1.jpg" width=40px" height="30px">
								</a>||
								<a href="view_category.php?viewid=<?php echo $row['category_id'];?>">
									<img alt="Qries" src="images/details.png" width=27px" height="30px">
								</a>
						 	</td>
						 </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
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
