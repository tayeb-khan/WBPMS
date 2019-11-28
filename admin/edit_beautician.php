
<?php
session_start();
error_reporting(0);
include('db.php');
if ($_SESSION['type'] == 0) {
  header('location:logout.php');
  } else if($_SESSION['type'] == 1)
							  {
						if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $off_day=$_POST['off_day'];
    $expert_area=$_POST['expert_area'];
    $deauty_starts_on=$_POST['deauty_starts_on'];
    $deauty_ends_on=$_POST['deauty_ends_on'];
    $monthly_salary=$_POST['monthly_salary'];
    $password=$_POST['password'];

   
 $eid=$_GET['editid'];
   
    $query=mysqli_query($con, "update  beautician set name='$name', email='$email', mobile='$mobile', off_day='$off_day', expert_area='$expert_area', deauty_starts_on='$deauty_starts_on', deauty_ends_on='$deauty_ends_on', monthly_salary='$monthly_salary', password='$password'  where beauty_id='$eid' ");
    if ($query) {
    $msg="Beautician has been Updated.";

    ?>

    <script type="text/javascript">
<!--
function Redirect() {
window.location="manage_beautician.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>

<?php



  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>PMS | Update Beautician</title>

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
					<h3 class="title1">Update Beautician</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Beautician Details</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  beautician where beauty_id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

											
											

?> 

  
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Beautician Name</label> 
							 	<input type="text" class="form-control" id="name" name="name" placeholder="Beautician Name" value="<?php  echo $row['name'];?>" required="true"> 
							 </div>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Email</label> 
							 	<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php  echo $row['email'];?>" required="true"> 
							 </div>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Mobile</label> 
							 	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php  echo $row['mobile'];?>" required="true"> 
							 </div>
							<!--  <div class="form-group"> 
							 	<label for="exampleInputEmail1">Expert Area</label> 
							 	<input type="text" class="form-control" id="expert_area" name="expert_area" placeholder="Expert Area" value="<?php  echo $row['expert_area'];?>" required="true"> 
							 </div> -->
							 <div class="form-group">
							 <label for="exampleInputEmail1">Category Name</label>
										<select class="form-control" name="expert_area" >
													<?php
													$product_query = "SELECT * FROM category ";
													$run_query = mysqli_query($con,$product_query);
													if(mysqli_num_rows($run_query) > 0){
														
													
														while($row = mysqli_fetch_array($run_query)){
															$category_id    = $row['category_id'];
															$category_name   = $row['category_name'];
												            			
															?>
                                                        <option value="<?php echo $category_name; ?>"><?php echo $category_name; ?></option>
                                                       
													   <?php
														}
														
													}?>
                                                    </select>
                                                     </div>
                                                    <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  beautician where beauty_id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

											$off_day   = $row['off_day'];
											$deauty_starts_on = $row['deauty_starts_on'];
											$deauty_ends_on = $row['deauty_ends_on'];
											$monthly_salary = $row['monthly_salary'];
											$password = $row['password'];
											

?>
										<div class="form-group">
							 <label for="exampleInputEmail1">Off Day</label>
										<select class="form-control" name="off_day" value='value="<?php  echo $row['off_day'];?>"' >
											<option value="Saturday">Saturday</option>
							                <option value="Sunday">Sunday</option>
											<option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
													
                                                    </select>
                                                     </div>
                               

							 	


							<!--  <div class="form-group"> 
							 	<label for="exampleInputEmail1">Off Day</label> 
							 	<input type="text" class="form-control" id="off_day" name="off_day" placeholder="Off Day" value="<?php  echo $row['off_day'];?>" required="true"> 
							 </div>
 -->
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Deauty Starts on</label> 
							 	<input type="text" class="form-control" id="deauty_starts_on" name="deauty_starts_on" placeholder="Deauty Starts on" value="<?php  echo $row['deauty_starts_on'];?>" required="true"> 
							 </div>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Deauty Ends on</label> 
							 	<input type="text" class="form-control" id="deauty_ends_on" name="deauty_ends_on" placeholder="Deauty Ends on" value="<?php  echo $row['deauty_ends_on'];?>" required="true"> 
							 </div>

							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Monthly Salary(Tk)</label> 
							 	<input type="text" class="form-control" id="monthly_salary" name="monthly_salary" placeholder="Salary" value="<?php  echo $row['monthly_salary'];?>" required="true"> 
							 </div>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1">Password</label> 
							 	<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php  echo $row['password'];?>" required="true"> 
							 </div>

							 <?php } }?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
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