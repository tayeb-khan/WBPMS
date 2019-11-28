<?php
session_start();
error_reporting(0);
include('db.php');
if ($_SESSION['type'] == 0) {
  header('location:logout.php');
  } else if($_SESSION['type'] == 1){

?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS || View Service</title>

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
    <?php include_once('includes/header.php');?>
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">View Service Details</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<h4>View Service:</h4>
						<?php
$cid=$_GET['viewid'];

$ret=mysqli_query($con,"select * from services where service_id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<table class="table table-bordered">
							<tr>
    <th>Service Name</th>
    <td><?php  echo $row['service_name'];?></td>
  </tr>
  <tr>
<th>Category</th>
    <td><?php  echo $row['category_name'];?></td>
  </tr>

<tr>
    <th>Price</th>
    <td><?php  echo $row['price'];?></td>
  </tr>
   <tr>
    <th>Service Cost</th>
    <td><?php  echo $row['service_cost'];?></td>
  </tr>
   <tr>
    <th>Discount</th>
    <td><?php  echo $row['discount'];?></td>
  </tr>
 
<tr>
    <th>Image</th>
    <td><img src="../images/<?php echo $row['image']; ?>" style="height:80px;width:100px;"></td>
  </tr>

  <a style='vertical-align: super;' href="edit_service.php?editid=<?php echo $row['service_id'];?>">
                        <img alt="Qries" src="images/edit1.png" width="30px" height="30px">
                      </a>
  
  						</table>
						<?php } ?>
						<?php } ?>
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
