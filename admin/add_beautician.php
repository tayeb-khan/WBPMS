<?php
session_start();
error_reporting(0);
include('db.php');
if ($_SESSION['type'] == 0) {
  header('location:logout.php');
  } else if($_SESSION['type'] == 1){

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $off_day =$_POST['off_day'];
    $expert_area=$_POST['expert_area'];
    $deauty_starts_on=$_POST['deauty_starts_on'];
    $deauty_ends_on=$_POST['deauty_ends_on'];
    $password=$_POST['password'];
    $monthly_salary=$_POST['monthly_salary'];

	

     
    $query=mysqli_query($con, "INSERT INTO `beautician` (`name`, `email`, `mobile`, `off_day`, `expert_area`, `deauty_starts_on`, `deauty_ends_on`, `password`, `monthly_salary`,`type`) VALUES ('$name', '$email', '$mobile', '$off_day', '$expert_area', '$deauty_starts_on', '$deauty_ends_on', '$password', '$monthly_salary','2');");
    if ($query) {
    	echo "<script>alert('Beautician has been added.');</script>"; 
    		echo "<script>window.location.href = 'manage_beautician.php'</script>";   
    $msg="Successfully Added";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  
}
  ?>
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
					<h3 class="title1">Add New Beautician</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Beauticians:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"></p>

							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Beautician Name</label> 
							 	<input type="text" class="form-control" id="name" name="name" placeholder="Beautician Name" value="" required="true"> 
							 	<label for="exampleInputEmail1">Email</label> 
							 	<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="" required="true"> 
							 	<label for="exampleInputEmail1">Mobile No</label> 
							 	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No" value="" required="true">
							 	<label for="exampleInputEmail1">Off Day</label> 
							 	<div class="form-group"> 
							 	<div class="select-wrap">
							        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							            <select name="off_day" id="off_day" required="true" class="form-control">
							            	<option value="Saturday">Saturday</option>
							                <option value="Sunday">Sunday</option>
											<option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
										</select>
							    </div>
							</div>


							 	<label for="exampleInputEmail1">Expert Area</label> 
							 	<div class="form-group"> 
							 	<div class="select-wrap">
							        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							            <select name="expert_area" id="expert_area" required="true" class="form-control">
							                <option value="">Select Area</option>
							                  <?php $query=mysqli_query($con,"select * from category");
					             				while($row=mysqli_fetch_array($query))
					              			{
					              			?>
							                       <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
							                       <?php } ?> 
							                      </select>
							    </div>
							</div>
							 	<label for="exampleInputEmail1">Salary(Tk)</label> 
							 	<input type="text" class="form-control" id="monthly_salary" name="monthly_salary" placeholder="Basic Salary" value="" required="true"> 
							 	<label for="exampleInputEmail1">Deauty Starts On</label> 
				                <input type="time" class="form-control appointment_time" placeholder="Duty Start on" name="deauty_starts_on" id='deauty_starts_on' required="true">
							 	 
							 	<label for="exampleInputEmail1">Deauty Ends On</label> 
							 	<input type="time" class="form-control appointment_time" placeholder="Ends on" name="deauty_ends_on" id='deauty_ends_on' required="true"> 
							 	<label for="exampleInputEmail1">Password</label> 
							 	<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required="true"> 
							 </div> 
							
							  <button type="submit" name="submit" class="btn btn-default">Add</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		
	</div>
	 <?php include_once('includes/footer.php');?>
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

<?php } ?>