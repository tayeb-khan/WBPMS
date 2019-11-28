<?php 


include "db.php";
include "header.php";

                                 if (!empty($_POST)) {
                                    $name=$_POST['username'];
                                    $pass=$_POST['password'];
                                    $pass=md5($pass);

                                    if (!empty($name)) {
                                        $sel="SELECT id FROM admin WHERE email='$name' AND password='$pass'";
                                        $Q=mysqli_query($con,$sel);
                                        $log=mysqli_fetch_assoc($Q);
                                        if ($log>0) {
                                           
                                                
                                                $_SESSION['adminId']=$log['id'];
                                                $_SESSION['adminName']=$log['email'];

                                            ?>

                                            <script type="text/javascript">
                                                window.location.href='admin/index.php';
                                            </script>


                                            <?php

                                            exit();
                                        }
                                        else{
                                            echo "Password or User Name Wrong";
                                        }
                                    }else{
                                        echo "Please Enter Name and Password";
                                    }
                                }
                            
                             ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background ="img/login.jpg">
<div class="box">
	<h2>Welcome back to PMS AdminPanel !</h2>
	<form action="" method="post">
		<div class="inputbox">

			<input type="text" name="username" required="" autocomplete="off">
			<label>Email</label>
			
			
		</div>
		<div class="inputbox">
			<input type="password" name="password" required="" autocomplete="off">
			<label>Password</label>
			
		</div>
		<center><input  class="btn btn-primary" type="submit" name="submit" value="Login"><br><br></center>
		
	</form>
	<div class="forgot-grid">
                                
                                <div class="forgot">
                                    <a href="index.php">Back to Home</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="forgot-grid">
                                
                                <div class="forgot">
                                    <a href="forgot-password.php">Forgot password?</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
	
</div>
 
</body>
</html>