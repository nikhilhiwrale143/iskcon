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
			          <a class="nav-link" data-fancybox data-src="#confirm_donation_modal" href="#">Donate</a>
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


<div class="fancy_popups" style="display: none;" id="login_modal">
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

<!--  Register Form Popup -->
<div class="fancy_popups" style="display: none;" id="signup_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title">Join us and make the <br> world a better place</h3>
    		<p class="mb-5">Fill in your details and sign up. An OTP will be sent to the mobile number for authentication. </p>
    	</div>

        <form action="#" method="post" class="signup_form">
 			
 			<!-- Register part start -->
 			<div class="row">
 				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="name" required="" autocomplete="off">
				        <label for="name">Name</label> 
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" id="email" required="" autocomplete="off">
				        <label for="email">Email Id</label>  
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="mobile" required="" autocomplete="off">
				        <label for="mobile">Mobile No.</label> 
				    </div>
				</div>
				<div class="col-md-12 mb-4">
					<div class="check_box">
						<input type="checkbox" id="register_checkbox" name="radio-group" required=""> 
						<label for="register_checkbox">I agree to the <a class="font-weight-bold text-dark" href="#">terms and conditions</a> and <a class="font-weight-bold text-dark">privacy policy</a></label>
						</div>
				</div>
				<div class="col-md-12">
					<input type="submit" class="btn btn-primary" value="Next"> 
					<span class="ml-3">Already a member? <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">Login </a></span>
				</div>
 			</div>
        	 
 			<!-- Register part end -->

            <!-- ************************************************ -->
            
            <!-- OTP Part start -->
           <!--  <hr>
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
		    </div> -->
            <!-- OTP Part end -->

        </form>
    </div>
</div>


<!--  Donate Now Confirm Popup -->
<div class="fancy_popups" style="display: none;" id="confirm_donation_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title mb-3">Confirm your donation</h3>
    		<!-- <p class="mb-5"> </p> -->
    	</div>

        <form action="#" method="get" class="cdonation_form">
 			
 			<!-- Register part start -->
 			<div class="row">
 				<div class="col-md-6"> 
 					<a href="#" class="edit_btn"><img src="assets/img/icons/edit.svg" alt="edit" class="img-fluid"> Edit </a>
					<div class="form-group"> 
						<div class="custom_lable">AMOUNT</div> 
				        <div class="no_of_meals">250 meals</div> 
				        <p class="amount">₹7,500 (estimated amount)</p>

				        <input type="hidden" name="no_of_meals" value="250">
				        <input type="hidden" name="amount" value="7500">
				    </div>
				</div>
				<div class="col-md-9">
					<div class="form-group my-4">
						<div class="custom_lable">FREQUENCY</div>
						<div class="frequency_radios">
							<input type="radio" id="one_time" name="frequency" value="one_time" required="">
							<label for="one_time">One time</label>

							<input type="radio" id="monthly" name="frequency" value="monthly" required="">
							<label for="monthly">Monthly</label>

							<input type="radio" id="yearly" name="frequency" value="yearly" required="">
							<label for="yearly">Yearly</label>
						</div>
						<!--   <input type="text" class="form-control" id="email" required="" autocomplete="off">
				        <label for="email">FREQUENCY</label>   -->
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
						<div class="custom_lable mb-3">OCCASION</div>
				        <input type="text" class="form-control" id="occasion" name="occasion" required="" autocomplete="off">
				        <label for="occasion">Eg. In memory of Mr. Ashok Kumar</label> 
				    </div>
				</div>
				<!-- <div class="col-md-12 mb-4">
					<div class="check_box">
						<input type="checkbox" id="popup_checkbox" name="radio-group" required=""> 
						<label for="popup_checkbox">I agree to the <a class="font-weight-bold text-dark" href="#">terms and conditions</a> and <a class="font-weight-bold text-dark">privacy policy</a></label>
					</div>
				</div> -->
				<div class="col-md-12">
					<input type="submit" class="btn btn-primary" value="Confirm"> 
					<!-- <span class="ml-3">Already a member? <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">Login </a></span> -->
				</div>
 			</div>
        	 
 			<!-- Register part end --> 

        </form>
    </div>
</div>