<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iskcon Mayapur</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Source+Serif+Pro:wght@400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap4/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" type="text/css" href="vendor/owl/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>
<body>

	<header class="header" id="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light ">
			  <a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" alt="Logo" class="img-fluid"> | <span class="font-bold">Mayapur</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">

				    <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="events.php">Calendar</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="about.php">About Us</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#">Donate</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="contact.php">Contact Us</a>
			        </li>
			        
			      <!--   <li class="nav-item">
			          <a class="nav-link" href="#"> <img src="assets/img/icons/search.svg" alt="SearchIcon"> Search</a>
			        </li> -->
			       <!--  <li class="nav-item">
			          <a class="nav-link font-weight-bold text-dark" href="#"><img src="assets/img/icons/signup.svg" alt="SearchIcon"> Sign Up / Login</a>
			        </li> -->

			    </ul> 
			  </div>


			  	<a class="nav-link font-weight-bold text-dark" href="javascript:void(0)">
				  	<a href="javascript:void(0)" data-fancybox data-src="#signup_modal" class=""> <img src="assets/img/icons/signup.svg" alt="signup">  Sign Up</a>  / 
				  	<a href="javascript:void(0)" data-fancybox data-src="#login_modal"  class="">Login</a> 
				</a>
 
			  	<div class="dropdown show profile_dropdown">
				  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="assets/img/profile.png" alt="profile">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="profile.php"><img src="assets/img/icons/profile.svg" alt="profile"> Profile</a>
				    <a class="dropdown-item" href="#"><img src="assets/img/icons/signup.svg" alt="signup"> Logout</a> 
				  </div>
				</div>

			</nav>
		</div>
 

	</header>


<div style="display: none;" id="login_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title">Let’s make the world <br> a better place</h3>
    		<p>Enter your mobile number and we will send you and OTP.</p>
    	</div>

        <form action="#" method="post" class="login_form">
 			
 			<!-- Login part start -->
        	<div class="form-group">
		        <input type="text" class="form-control" id="name" required="" autocomplete="off">
		        <label for="name">Enter mobile no.</label> 
		    </div>
		    <div class="w-100">
		    	<button type="submit" class="btn btn-primary">Send OTP</button> 
		    	<span class="ml-3">Not a member yet? <a href="javascript:void(0)" data-fancybox data-src="#signup_modal" class="text-dark font-weight-bold">Register Now</a></span>
		    </div>
 			<!-- Login part end -->

            <!-- ************************************************ -->
            
            <!-- OTP Part start -->
            <hr>
            <span>Almost there!</span>
            <div class="form-group mt-3">
		        <input type="text" class="form-control" id="otp" required="" autocomplete="off">
		        <label for="otp">Enter OTP</label> 
		    </div>
		    <p>Didn’t receive yet?<a href="javascript:void(0)"> Resend OTP </a></p>
		    <div class="w-100">
		    	<span class="mr-3"> <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">
		    		<img src="assets/img/icons/back.svg" alt="back"> Go Back</a></span>
		    	<button type="submit" class="btn btn-primary">Confirm</button>  
		    </div>
            <!-- OTP Part end -->

        </form>
    </div>
</div>