
<?php
session_start();
error_reporting(0);
include('db.php');

						if(isset($_POST['submit']))
  {
  	 $eid=$_GET['editid'];

    $service_name=$_POST['service_name'];
	
	
	 $category_name = $_POST["category_name"];
	
		if( $category_name == "none" ){
			
			
          $category_name = $_POST["category_name1"];


		}	


        if( $category_name != "none" ){
			
			
          $category_name = $category_name;


		}			
							 
	
							
	
	
    
    $price=$_POST['price'];
    $service_cost=$_POST['service_cost'];
    $discount=$_POST['discount'];
    $image = $_POST["images"];
	$image1 = $_FILES['image']['name'];
	$details = $_POST['details'];

   


 

							 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 6097152){
         $errors[]='File size must be exactely 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }							
                   
				   
				  
							 
							 
							 if($file_name == "")
								 
							 
							 {
								 $file_name = $image;
							 }
							 if($file_name != "")
								 
							 
							 {
								 $file_name =  $file_name;
							 }


    $query=mysqli_query($con, "update  services set service_name='$service_name', category_name='$category_name', price='$price', service_cost='$service_cost', discount='$discount', image ='$file_name', details='$details'  where service_id='$eid' ");
    if ($query) {
    $msg="Service has been Updated.";

    ?>

    <script type="text/javascript">
<!--
function Redirect() {
window.location="manage_service.php";
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
<title>PMS | Update Service</title>

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
				<div class="forms">
					<h3 class="title1">Update Services</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Parlour Services:</h4>
						</div>
						<div class="form-body">
							<form method="post"  enctype="multipart/form-data" >
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  services where service_id='$cid'");
$cnt=1;
while ($row2=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group"> 

							 	<div class="form-group"> 
							 	<div class="select-wrap">
							        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
									New category
							            <select name="category_name" id="category"  class="form-control">
							               
										   <option value="none"  > Select a category</option>
										   
										   
										   
							                  <?php $query1=mysqli_query($con,"select * from category");
					             				while($row1=mysqli_fetch_array($query1))
					              			{
					              			?>
							                       <option value="<?php echo $row1['category_name'];?>"><?php echo $row1['category_name'];?></option>
							                       <?php } ?> 
							                      </select>
							    </div>
							</div>
							
							<?php
 $cid=$_GET['editid'];
$ret1=mysqli_query($con,"select * from  services where service_id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret1)) {

?> 
							
							<label for="exampleInputEmail1"> Previous category </label>
							<input type="text" class="form-control" id="service_name" name="category_name1" placeholder="Service Name" value="<?php  echo $row['category_name'];?>" readonly > 

							

							 	<label for="exampleInputEmail1">Service Name</label> 
							 	<input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service Name" value="<?php  echo $row['service_name'];?>" > 
							 	<label for="exampleInputEmail1">Price</label> 
							 	<input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php  echo $row['price'];?>" min="1"> 
							 	<label for="exampleInputEmail1">Service Cost</label> 
							 	<input type="text" class="form-control" id="service_cost" name="service_cost" placeholder="Service Cost" value="<?php  echo $row['service_cost'];?>" min="1"> 
							 	<label for="exampleInputEmail1">Discount</label> 
							 	<input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" value="<?php  echo $row['discount'];?>"  min="0"> 
							 	
								
								<label for="exampleInputEmail1">Service Details</label> 
							 	<textarea type="text" class="form-control" id="details" name="details" placeholder="Discount" value="<?php  echo $row['details'];?>"><?php  echo $row['details'];?> </textarea>
								
								
								<br>
								
							 	<label for="exampleInputEmail1"> Image </label>
							 	<label for="exampleInputEmail1"><img src="../images/<?php echo $row['image']; ?>" style="height:60px;width:100px;">
								<input type="file" name="image" value="">
								<input type="hidden" name="images" value="<?php echo $image; ?>">
								</label>
								
								
								
								
		
							 </div> 
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						
					</div>
				
				
				<?php 
				
									if(isset($_POST['submit']))
  {
  	 $eid=$_GET['editid'];

    $service_name=$_POST['service_name'];
	
	
	 $category_name = $_POST["category_name"];
	
		if( $category_name == "none" ){
			
			
          $category_name = $_POST["category_name1"];


		}	


        if( $category_name != "none" ){
			
			
          $category_name = $category_name;


		}			
							 
	
							
	
	
    
    $price=$_POST['price'];
    $service_cost=$_POST['service_cost'];
    $discount=$_POST['discount'];
    $image = $_POST["images"];
	$image1 = $_FILES['image']['name'];
	$details = $_POST['details'];

   


 

							 $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 6097152){
         $errors[]='File size must be exactely 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }							
                   
				   
				  
							 
							 
							 if($file_name == "")
								 
							 
							 {
								 $file_name = $row['image'];
							 }
							 if($file_name != "")
								 
							 
							 {
								 $file_name =  $file_name;
							 }


    $query=mysqli_query($con, "update  services set service_name='$service_name', category_name='$category_name', price='$price', service_cost='$service_cost', discount='$discount', image ='$file_name', details='$details'  where service_id='$eid' ");
    if ($query) {
    $msg="Service has been Updated.";

    ?>

    <script type="text/javascript">
<!--
function Redirect() {
window.location="manage_service.php";
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
<?php } ?>