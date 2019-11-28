
				
		<?php include"include/header.php"; ?>		
				
				<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title" style="background-color:#444;color:#fff;">
                            <div class="page-title-wrapper" >
                                <div class="page-title-heading" >
                                    
                                   
                                       <center> Student LIST
                                        
										</center>
                                   
                                </div>
								
								
						   </div>
                        </div>          

							<?php
							
								if(isset($_GET["did"])){
								
								$activityid = $_GET["did"];
								
								$query = "delete from students  WHERE id = '$activityid'";
								$getuser = $db->delete($query);
								if($getuser){
									 echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Student is deleted successfullly</b>
															</div></center>";
															?>
															
													<script type="text/javascript">
														<!--
														function Redirect() {
															
															

														window.location="studentadd.php";
														}

														setTimeout('Redirect()', 1000);
														//-->
													</script>		
										<?php
								}
								
							}
							
							
							
							
							
							
							
							
							
							if(isset($_POST["updateActivity"])){
								      $name= $_POST["name"];
									  $aid= $_POST["aid"];
								   
									 $eventdate= $_POST["eventdate"]; 
									  $seat= $_POST["seat"]; 
									 $details= $_POST["details"];
								   
								  $semester= $_POST["semester"];
								
								$query = "UPDATE event SET name ='$name',seat ='$seat',details ='$details',date_line ='$eventdate',semester ='$semester' WHERE id = '$aid'";
								$getuser = $db->update($query);
								if($getuser){
									 echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Activity is updated successfullly</b>
															</div></center>";
															?>
															
													<script type="text/javascript">
														<!--
														function Redirect() {
															
															

														window.location="activity_list.php";
														}

														setTimeout('Redirect()', 1000);
														//-->
													</script>		
										<?php
								}
								
							}
							
							
							
							 if(isset($_POST["edit_student"]))
							   
							   {
								   $stuname= $_POST["name"];
								   $sid = $_POST["id"];
									 $student_id= $_POST["stu_id"]; 
									  $s_dept= $_POST["department"]; 
									 $s_semester= $_POST["semester"];
								   $date = date("Y-m-d");
								  $s_batch= $_POST["batch"];
								  $s_emb= $_POST["emb"];
								  $s_room= $_POST["room"];
								  $s_mobile= $_POST["mobile"];
								  $s_email= $_POST["email"];
								   $s_username= $_POST["username"];
								    $s_pass= $_POST["password"];
									$pimage= $_POST["image1"];
								
								  
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
         move_uploaded_file($file_tmp,"../images/user/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
		
	  if($file_name == "" )
	  {
		  $file_name1 = $pimage;
		  
	  }
	  if($file_name != "" ){
		  
		   $file_name1 = $file_name;
		  
	  }	
								  
							
									  
									  
									  $sql = " update students set name ='$stuname',stu_id ='$student_id',department ='$s_dept',semester ='$s_semester',email ='$s_email',mobile ='$s_mobile',image ='$file_name1',emb_section ='$s_emb',room_no ='$s_room',username ='$s_username',password ='$s_pass',stu_semester ='$s_semester'  where  id = '$sid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Student info is updated Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
															<!--
															function Redirect() {
															window.location="studentadd.php";
															}
															
															setTimeout('Redirect()', 1000);
															//-->
															</script>
														
														
														<?php
														exit();
													}
									  
								 
								  
								   
							   }
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						   if(isset($_POST["add_student"]))
							   
							   {
								   $stuname= $_POST["name"];
								   
									 $student_id= $_POST["id"]; 
									  $s_dept= $_POST["department"]; 
									 $s_semester= $_POST["semester"];
								   $date = date("Y-m-d");
								  $s_batch= $_POST["batch"];
								  $s_emb= $_POST["emb"];
								  $s_room= $_POST["room"];
								  $s_mobile= $_POST["mobile"];
								  $s_email= $_POST["email"];
								   $s_username= $_POST["username"];
								    $s_pass= $_POST["password"];
								
								  
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
         move_uploaded_file($file_tmp,"../images/user/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
								  
								  
								  $tmsql = "select * from students where stu_id = $student_id AND semester = '$s_batch' ";
											$tre1 = mysqli_query($con,$tmsql);
											$number1 = mysqli_num_rows($tre1);
								  
								  if( $number1 > 0)
								  {
									  echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Student with id ".$student_id." already registered.</b>
															</div></center>
														";
								  }
								  
								  else{
									  
									  
									  $sql = "INSERT INTO `students`
													(`name`, `stu_id`, `department`, `semester`, `email`, `mobile`, `image`, `emb_section`, `room_no`, `username`, `password`, `stu_semester`) 
													VALUES ('$stuname','$student_id','$s_dept','$s_batch','$s_email','$s_mobile','$file_name','$s_emb','$s_room','$s_username','$s_pass','$s_semester')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Student is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
															<!--
															function Redirect() {
															window.location="studentadd.php";
															}
															
															setTimeout('Redirect()', 1000);
															//-->
															</script>
														
														
														<?php
														exit();
													}
									  
								  }
								  
								   
							   }
						   
						   ?>
								
								
								<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Student List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Add Student</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
									
									<h5 class="card-title">Student List</h5>
									
									
									
                                <table class="table table-striped table-bordered table-hover" id="usetTable">
                                 
                                    <thead>
                                        <tr>
                                             <th>#</th>
											 <th>image</th>
											
                                            <th>Studnet Name</th>
                                           
										
											<th>Id</th>
											<th>Department</th>
											<th>Batch</th>
											<th>Semester</th>
											<th>EMB section</th>
											<th>Room no</th>
											<th>Contact/login info</th>
											
											
											
											
											
											<th>Action</th>
											
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									$sl = 0;
									
									$tsql = "select * from students ORDER BY id DESC";
									$tre = mysqli_query($con,$tsql);
									while($row=mysqli_fetch_array($tre) )
									{	
											$id = $row['id'];
										$name = $row['name'];
										
										$stu_id = $row['stu_id'];
										$department = $row['department'];
										$semester = $row['semester'];
										$stu_semester = $row['stu_semester'];
										$email = $row['email'];
										$mobile = $row['mobile'];
										$image = $row['image'];
										$emb_section = $row['emb_section'];
										$room_no = $row['room_no'];
										$username = $row['username'];
										$password = $row['password'];
										
										$sl++;
									
									
									?>
                                      <tr>
									<td> <?php echo $sl ;?> </td>
									<td> <img src="../images/user/<?php echo $image;?>" style="height:60px;width:80px;" </td>
									
									<td> <?php echo $name;?> </td>
									
									<td> <b style="color:#ea931c;"><?php echo $stu_id;?></b> </td>
									
									<td> <?php echo $department;?> </td>
									<td> <?php echo $semester;?> </td>
									<td> <?php echo $stu_semester;?> </td>
									
									<td> <?php echo $emb_section;?> </td>
									<td> <?php echo $room_no;?> </td>
									<td> Mobile: <b style="color:#ea931c;"><?php echo $mobile;?> </b><br>Email:<b style="color:#ea931c;"> <?php echo $email;?> </b></td>
									
									<td>

									<a href="" class="stuedit" seid="<?php echo $id;?>" data-toggle="modal" data-target="#exampleModal" > <span class="badge badge-primary"> Edit</span> </a>   <a href="?did=<?php echo $id;?>"><span class="badge badge-danger"> Delete</span> </a></td>
									
									
									
									
									
									
									
									
									</tr>
									
									<?php }
									?>  
                                    </tbody>
                                </table>
                            
									
									
									
									
									
                                        
                                    </div>
                                </div>
                                
                            </div>
							
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Add New student</h5> <hr/>
                                       <form action="" method="post" enctype="multipart/form-data">
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							<label>Student Name</label>
							<input type="text" name="name" value="" class="form-control" placeholder="write.." >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Student Id</label>
							<input type="text" name="id" value="" class="form-control" placeholder="write.." >
							</div>
						</div>	
						<div class="col-md-2">	
							<div class="form-group">
							<label>Department</label>
							<select class="form-control" name="department" >
															   <option value="bcse" selected >Select an option</option>
                                                        <?php
									$sl = 0;
									
									$tsql = "select * from department  ORDER BY id DESC";
									$tre = mysqli_query($con,$tsql);
									while($row=mysqli_fetch_array($tre) )
									{	
											$depart_id = $row['id'];
										$depart_name = $row['name'];
										
										
										
									
									?>
                                                        <option value="<?php echo $depart_name; ?>"><?php echo $depart_name; ?></option>
                                               
									<?php } ?>
                                                    </select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							<label>Semester</label>
							<input type="text" name="semester" value="" class="form-control"  >
							</div>
						</div>
						<div class="col-md-2">	
							<div class="form-group">
							<label>Batch</label>
							<select class="form-control" name="batch" >
															   <option value="bcse" selected >Select an option</option>
                                                        <?php
									$sl = 0;
									
									$tsql = "select * from semester  ORDER BY id DESC";
									$tre = mysqli_query($con,$tsql);
									while($row=mysqli_fetch_array($tre) )
									{	
											$semester_id = $row['id'];
										$semester_name = $row['name'];
										
										
										
									
									?>
                                                        <option value="<?php echo $semester_name; ?>"><?php echo $semester_name; ?></option>
                                               
									<?php } ?>
                                                    </select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label>EMB Section</label>
							<input type="text" name="emb" value="" class="form-control" placeholder="write.." >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label>Room No/Dorm name</label>
							<input type="text" name="room" value="" class="form-control"    placeholder="write..">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Student image</label>
							<input type="file" name="image" value="" class="form-control"   >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label>Mobile no</label>
							<input type="text" name="mobile" value="" class="form-control" placeholder="write ..." >
						
							<br>
							
							</div>		
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" value="" class="form-control" placeholder="write ..." >
						
							<br>
							
							</div>		
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="" class="form-control" placeholder="write ..." >
							
							<br>
							
							</div>		
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="" class="form-control" placeholder="type ..." >
							
							<br>
							
							</div>		
						</div>
						
						<center> <input type="submit" name="add_student" class="btn btn-success" value="submit" ></center>
                        </div>
                            </form>
							</div>
								
								
								
								
                            </div>
                        </div>
						
						
						
						
						
						
						

                    </div>
					
					
					
					
					
					<?php include"include/footer.php"; ?>	
					
			
					<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Student Info update</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
															<p id="stu_edit_view">   </p>
													</div>
												</div>
											</div>
										</div>
					