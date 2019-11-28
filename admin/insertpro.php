<?php 
include"db.php";			



			if (isset($_POST["submit1"])) {
											$a = $_POST["category"];
											$b = $_POST["name"];
											$c = $_POST["prize"];
											$d = $_POST["qty"];
											$e = $_POST["status"];
											$f = $_POST["desc"];
											
											
											$i = $_POST["cost"];
											$s = $_POST["sub_category"];
											$discount = $_POST["discount"];
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
											$sql = "INSERT INTO `products`
													(`product_cat`, `product_title`, `product_price`, `product_cost`, `quantity`, `status`, `product_desc`, `product_image`,  `sub_cateid`,`discount`) 
													VALUES ('$a','$b','$c','$i','$d','$e','$f','$file_name','$s','$discount')";
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
window.location="addproduct.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
											if (isset($_POST["cate"])) {
											$a = $_POST["catname"];
											$b = $_POST["status"];
											
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
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }					
											$sql = "INSERT INTO `categories`
													(`cat_title`, `status`, `image`) 
													VALUES ('$a','$b','$file_name')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Category is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										
										
										
										if (isset($_POST["subcate"])) {
											$sa = $_POST["subcatname"];
											$sb = $_POST["status"];
											$sm = $_POST["main"];
											
											
											$sql = "INSERT INTO `sub_cat`
													(`name`, `status`, `main_cate`) 
													VALUES ('$sa','$sb','$sm')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product sub Category is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										
										
			if (isset($_POST["delete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM products WHERE product_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is deletedSuccessfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="products.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
																	
			if (isset($_POST["catdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM categories WHERE cat_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="category.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										

										
										
										
										
																							
			if (isset($_POST["codelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM comments WHERE id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Comments is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="comments.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										if (isset($_POST["subcatdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM sub_cat WHERE id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your subcategory is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="subcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										if (isset($_POST["orderdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM orders WHERE order_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Order is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="view_order.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
											if (isset($_POST["Rdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM pro_review WHERE name = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Comments is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="review.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}

										if (isset($_POST["orderdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM appointment WHERE id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your Appointment is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="all-appointment.php";
}
document.write("<center>You will be redirected to main page in 1 sec.</center>");
setTimeout('Redirect()', 1000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
                                        ?>
										
										
										
										
										
										