<?php include "header.php";?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <div id="page-wrapper">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slider/1.jpg" alt="Los Angeles" style="width: 100%; height: 400px;">
    </div>

    <div class="item">
      <img src="img/slider/5.jpg" alt="Chicago" style="width: 100%; height: 400px;">
    </div>

    <div class="item">
      <img src="img/slider/4.jpg" alt="New York" style="width: 100%; height: 400px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="icon">
                        <a href="">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                        <h4>Our facebook</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="icon1">
                        <a href="">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        </a>
                        <h4>Our calender</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        
                    </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="icon2">
                        <a href="">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </a>
                        <h4>Always on time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        
                        
                    </div>
                   </div>
                    
                </div>
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                                
                <div class="h1"><center><h1 style="color:#a51349">Our Mission</h1></center></div><br>

                <p align="justify">To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.</p>
                </div>
                <div class="col-md-6">
                <div class="h1"><center><h1 style="color:#a51349">Our Vision</h1></center></div><br>
                <p align="justify">In the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin SingaporeIn the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin Singapore.</p>
                
                </div>
                </div>
              </div>
            

           <div class="h1"> <center><h1 style="color:#a51349">Services we are the best</h1></center></div><br>
           

            
                  
        <div class="container">

            <div class="row">
                                    <?php

$ret=mysqli_query($con,"select * from services limit 6");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <div class="col-md-4">
            <div class="product1">
                    
                            <img src="images/<?php echo $row['image']; ?>" style="height:255px;width:350px;padding: 10px">
                             <!-- <h3 style="color:#fdc00a"><?php echo $row['service_name']; ?></h3>
                             <?php
                             if($row['discount']>0){ ?>
                                <h6 style="color:#fdc00a">Discount <?php echo $row['discount']; ?> %</h6>
                                <?php
                             }
                             ?> -->
                             
                           
                         <div class="overlay">
                        <div class="text1">
                            <h3 style="color:#040404"><?php echo $row['service_name']; ?></h3>

                            <?php
                            if($row['discount']>0){
                                ?>
                                <h4 style="color:red"><Del> <?php echo $row['price'];?>Tk</h4>
                                    <h4 style="color:green"><?php echo $row['price'] - ($row['discount'] * $row['price'])/100; ?> Tk</h4>
                                
                                <?php
                            }
                            else{?>
                                <h4 style="color:green"><?php echo $row['price']; ?> Tk</h4>
                                <?php
                            }
                            ?>
                            <a href="details.php?id=<?php echo $row['service_id'] ;?>" class="btn btn-success">  Details</a>
                            <a href="appointment.php?id=<?php echo $row['service_id'] ;?>" class="btn btn-success">  Place Appointment</a>
                            
                         </div>
                        </div>
                    </div>
                    
                
                
            </div>
            <?php } ?>
        </div>
    </div>
        
                
            
      
        <div class="cont"><center><h1 style="color:#a51349">CONTACT WITH US</h1></center></div>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 h2 style="color:#a51349">Parlour Information</h1>
                <p><b>Address:</b>Uttara 1230  Sector-10 Road-12.</p>
                <p><b>Email:</b>Service@gmail.com.</p>
                <p><b>Phone No:</b>+88 01773 257 139,+88 01755 174 090.</p>
                
            </div>
            <div class="col-md-6">
                <div class="contact-title">
                    <center><h2 h2 style="color:#a51349">Contact Us</h2></center>
                    
                </div>
                <div class="contact-form">
                    <form id="contact-form" method="post" action="">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        <br>
                        <input type="email" name="Email" class="form-control" placeholder="Your Email" required="">
                        <br>
                        <input type="text" name="mobile" class="form-control" pattern="/[0-9]{11}$" placeholder="Your 11 digit mobile no" required="example: 01900123645">
                        <br>
                        <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                        <br>
                            <input type="submit" name="send" class="formhf" value="Send Message">
                    </form>
                </div>

                <?php
                
                include"db.php";
                if(isset($_POST["send"]))
                    
                    {
                        $name= $_POST["name"];
                        $email= $_POST["Email"];
                        $message= $_POST["message"];
                        $mobile = $_POST["mobile"];
                    


                     if( $name == '' || $email == '' || $message == '' || $mobile =='' )
                     {
                                    echo "
                                                            <center> <div class='alert alert-success'>
                                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                <b>Please fill up the form first</b>
                                                            </div></center>
                                                        ";
                     }

else

{   
                        $sql = "INSERT INTO `message`
                                                    (`name`, `email`, `message_body`,'mobile') 
                                                    VALUES ('$name','$email','$message','$mobile')";
                                                    if (mysqli_query($con,$sql)) {
                                                        echo "
                                                            <center> <div class='alert alert-success'>
                                                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                                                <b>Your Message is sent Successfully..!</b>
                                                                <b>We will Contact with You soon.</b>
                                                            </div></center>
                                                        ";
                                                        
                                                        
                                                        
                                                    }
}
                        
                    }
                
                ?>
                
            </div>

            
        </div>
         
    </div>
        
        <?php include"footer.php";?>