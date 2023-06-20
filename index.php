<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon"  href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>ESMS: An Electronic Service Management System</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>
</head>
<body>

	<!--navbar-->
	<nav class="navbar navbar-expand-sm navbar-light shadow bg-light pl-5 fixed-top">
		<a href="index.php" class="navbar-brand ">ESMS</a>
		<span class="pr-5">Electronics service management system</span>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon pr-5"></span>
		</button>

		<div class="collapse navbar-collapse text-right pl-5" id="myMenu">
			<ul class="navbar-nav text-right" id="navtext">
				<li class="nav-item p-2"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item p-2"><a href="#" class="nav-link">Technician</a></li>
				<li class="nav-item p-2"><a href="#" class="nav-link">Admin Page</a></li>
				<li class="nav-item p-2"><a href="#" class="nav-link">Service</a></li>
				
				<li class="nav-item p-2"><a href="#contact" class="nav-link">Contact</a></li>
				<li class="nav-item p-2"><a href="login.php" class="nav-link btn btn-info pr-3 pl-3 text-light">Login</a></li>
			</ul>
		
	</nav>

	<!--section1-->

	<div class="sec1 container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="header">Welcome To ESMS</h1>
				<p>#1 Electronic Service Provider</p>
				<a href="#services"><button type="button" class="btn btn-primary btn-lg ml-5 border border-white">Learn More</button></a>
			</div>

			<div class="col-lg-6" id="acc">
				<?php
					include('registration.php');
				?>
			</div>
		</div>
		
	</div>

	<!--section 3-->
	      <!--What we do Section Start-->
		  <section class="container sec3">
         <div class="row">
           
            <div class="col-lg-6">
               <h5>What We Do?</h5>
               <h1>We provide electronic <span style="color: green;">service </span> </h1>
               <p>ESMS  or  electronic  service  management  system  is  the country’s first dedicated electronic service system which will  provide onestop solution for the electronic device maintenance and services.</p>
               <div class="facility">
                  <h4>Our facilities</h4>
                  <ul>
                     <li><i class="fas fa-check-double"></i>Area Wise Service</li>
                     <li><i class="fas fa-check-double"></i>Online Appointment</li>
                     <li><i class="fas fa-check-double"></i>Checking Service Status</li>
					 <li><i class="fas fa-check-double"></i>Cash on Delivery</li>
                  </ul>
               </div>
            </div>
             <div class="col-lg-6" id="imgsec3">
               <img src="img/wwd.png" alt="facility">
            </div>
         </div>
      </section>
      <!--What we do Section end-->

	 <!--Service category Section-->
	<div class="container" id="services">
		<h1 class="text-center mb-4">Service Categories</h1>
		<div class="row mt-4 pt-3">
		<div class="col-sm-4 text-center services1">
			<i class="fas fa-sliders-h"></i>
			<h4>Maintenance</h4>
		</div>

		<div class="col-sm-4 text-center services2">
			<i class="fas fa-laptop-medical"></i>
			<h4>Applience  Repair</h4>
		</div>

		<div class="col-sm-4 text-center services3">
			<i class="fas fa-tools"></i>
			<h4>Tools & Curcuit Repair</h4>
		</div>
	</div>
</div>
	 <!--Service category End-->


	<!--More About Us section-->
	<div class="container mt-4 p-2" id="about_us">
		<div class="jumbotron">
			<h1 class="text-center text-indigo">More About Us!</h1>
			<p>We can not think of our daily life without electronicdevices  like  computer,  mobile  phone,  cell  phone, television airconditioner, fan, light and lot more. But we often get our devicesdestructed. We need to go to the technician physically to get ourdevices  fixed  which  is  a  real  hassle  for  us.  Sometimes  we  throwthose  devices  away  which  is  a  cause  of environmental  pollution.So, we have come up with a new idea which is electronic service management system or ESMS. It is the only solution where anyone  will  be  able  to  get  their  electronic  devices  by sitting  intheir home.</p>
		</div>
		
	</div>
	<!--More About Us section end-->
	
<!--section 4-->
<div class="jumbotron mt-4" id="technicians">
	<div class="container">
		<h1 class="text-center">Top Technicians</h1>
		<div class="row mt-4 pt-3">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="img/sarker.jpg">
						<h4>Shourav Sarker</h4>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						
						<img src="img/motlab.jpg">
						<h4>Mr. John</h4>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					</div>
				</div>
			</div>


			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="img/hridoy.jpg" alt="hridoy">
						<h4>Thomas Lee</h4>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<img src="img/mehedi.jpg" alt="mehedi">
						<h4>Mehedi Hasan</h4>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					</div>
				</div>
			</div>

		
		</div>
	</div>
</div>
<!-- faq section --> 
<section class="faq" id="faq-section">
    <div class="container py-5">
        <div class="faqhead"><h1>Frequently Asked Questions</h1></div>
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="accordion" id="medifallFaq">
                    <div class="card">
                        <div class="card-header p-2" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Q: What is ESMS?
                                </button>
                              </h5>
                        </div>
    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#medifallFaq">
                            <div class="card-body">
                                <b>Answer:</b> It is a dedicated electronic service management system.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Q: How does it work?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#medifallFaq">
                            <div class="card-body">
                                <b>Answer:</b> We collect service proposals from the customers and assign a skilled technician for that particular customer.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Q. How to donate send service request?
                                </button>
                              </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#medifallFaq">
                            <div class="card-body">
                                <ol class="pl-2">
                                    <li>Sign up to the ESMS and login to your dashboard.</li>
                                    <li style="font-weight: bold;">Go to the submit request section and fill up the form using credentials.</li>
                                    <li>hit the Send button and wait for confirmation.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Q. What if I cannot register to the system?
                                </button>
                              </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#medifallFaq">
                            <div class="card-body">
                                <b>Answer:</b> Check your email address if it is unique or not. Put a unique email and try again. If still not work, please <a href="#contact">contact</a> with our admin.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  Q. Is there any shipping or delivery charge?
                                </button>
                              </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#medifallFaq">
                            <div class="card-body">
                                <b>Answer:</b> No. We provide free home delivery charge for the customers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
</section>
<!-- faq end -->
<div>
<?php
	include('contact/contact.php')?>
</div>
	<?php
	include('footer.php')?>
</body>
</html>