<?php include "header.php";?>

 <div class="background">
  	<img src="img/slider/4.jpg">
    <center><p><h1 style="color:#a51349">ABOUT OUR SERVICES</h1></p></center>
  </div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<center><h1 style="color:#a51349">Our Mission</h1></center>

                <p align="justify">To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.To march ahead with a relentless pursuit to deliver unmatched design quality by neverletting the learning curve drop, by valuing client relationships and by keeping up ourundying innovation spirit.</p>
                </div>
		
		<div class="col-md-6">
			<center><h1 style="color:#a51349">Our Mission</h1></center>
                <p align="justify">In the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin SingaporeIn the next 5 years, by delivering well-differentiated web design services worthy of our best selves, we want to take on the lionâ€™s share of the pie owned by mid-sized web design agenciesin Singapore.</p>
		</div>
	</div>
</div>
<center><p><h1 style="color:#a51349"> OUR PROTFOLIO</h1></p></center>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="product1">
					<img src="img/ab1.jpg">
					<div class="overlay">
						<div class="text1">
							<p><b><h5>Feel More Beautiful</h5></b></p>
							<p><b><h5>Facial,Meassge,Spa Treatment</h5></b></p>
							
							
						</div>
						
					</div>
					
				</div>
		</div>
		<div class="col-md-6">
			<div class="product1">
					<img src="img/ab.jpg">
					<div class="overlay">
						<div class="text1">
							<p><b><h5>Hair Salon.bd</h5></b></p>
							<p><b><h5>Hair Straight,Hair Color,Hair Spa</h5></b></p>
							
							
						</div>
						
					</div>
					
				</div>
		</div>
	</div>
</div>
<div class="h1"><center><h1 style="color:#a51349"> Employee INFORMATION</h1></center></div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <img src="img/beauty.jpg">

            <h3>Makeover Details</h3>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
            <span>Alex Ghoot </br>Expert Area:Facial Treatment</span></p>


<button onclick="mymFunction()" id="myBtn2">Read more</button>
<script>
function mymFunction() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
            
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
      <img src="img/beauty1.jpg">
      <h3>Hair Style Details</h3>
      <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots3">...</span><span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
      <button onclick="mynFunction()" id="myBtn3">Read more</button>
<script>
function mynFunction() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</div>
        
</div>
</div>

<?php include"footer.php";?>