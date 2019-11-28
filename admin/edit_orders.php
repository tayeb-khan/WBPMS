<?php 
include"db.php";

if (isset($_GET["Aid"])) {

	
	$orderid= $_GET['Aid'];
	
													
	$sql = "UPDATE appointment SET status ='1' WHERE id = '$orderid' ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Appooinment  is Accepted</b>
				</div>";
				
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="accepted_appointment.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
<?php
	}
	
}
	
	
	if (isset($_GET["Rid"])) {

	
	$orderid= $_GET['Rid'];
	
		$sql = "UPDATE appointment SET status ='2' WHERE id = '$orderid' ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Appooinment  is Rejected</b>
				</div>";
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="rejected_appointment.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
<?php
	}
	
}
	
	
	
if (isset($_GET["Cid"])) {

	
	$orderid= $_GET['Cid'];
	
													
	$sql = "UPDATE appointment SET status ='3' WHERE id = '$orderid' ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Appooinment  is Completed</b>
				</div>";
				
		
		
		?>
	
<script type="text/javascript">
<!--
function Redirect() {
window.location="completed_appointment.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
<?php
	}

}



?>