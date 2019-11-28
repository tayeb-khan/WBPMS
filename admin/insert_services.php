<?php 
include"db.php";			



			if (isset($_POST["submit1"])) {
											$category = $_POST["category"];
											$service_name = $_POST["service_name"];
											$price = $_POST["price"];
											$discount = $_POST["discount"];
											$cost = $_POST["cost"];
											$details = $_POST["details"];
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
											$sql = "INSERT INTO `services`
													(category_name,service_name,price,discount,service_cost,image,details) 
													VALUES ('$category','$service_name','$price','$discount','$cost','$file_name','$details')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is Added Successfully..!</b>
															</div></center>
														";
														
														
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
														exit();
													}
											
											
											
										}

