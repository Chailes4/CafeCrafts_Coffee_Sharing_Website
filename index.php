<?php
session_start(); // Start the session

// Check if signup success message exists
if(isset($_SESSION['signup_success']) && $_SESSION['signup_success'] === true) {
    // Display JavaScript alert for the pop-up message
    echo "<script>alert('Sign up successful!');</script>";
    // After displaying the pop-up, unset the session variable to prevent it from showing again on page refresh
    unset($_SESSION['signup_success']);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Café Crafts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Café<small>Crafts</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Recipe
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="abt.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="fb.html" class="nav-link">Feedback</a></li>
                <li class="nav-item">
                 <a class="nav-link" id="Home" href="#" data-toggle="modal" data-target="#Login">Login</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
	      <div class="modal fade" id="Sign-Up">
        <div class="modal-dialog modal-dialog-centered modal-lg text-center" >
            <div class="modal-content" id="signupmod">
                <div class="modal-header">
                    <p class="font-weight-bold">Sign-Up</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="signup.php" method="post" class="form-horizontal">
                        <div class="form-group control-label">
                            <input type="text" name="firstname" placeholder="First Name" autocomplete="false" required>
                        </div>
                        <div class="form-group control-label">
                            <input type="text" name="lastname" placeholder="Last Name" autocomplete="false" required>
                        </div>
                        <div class="form-group control-label">
                            <input type="email" name="email" placeholder="E-mail" autocomplete="false" required>
                        </div>
                        <div class="form-group control-label">
                            <input type="password" name="password" id="pw1" placeholder="Password" autocomplete="false" required>
                            <?php
                     // Check for password length error
                        if (isset($_GET['passwordLengthError'])) {
                        echo "<script>alert('Password must be at least 8 characters long.');</script>";
    }
    ?>
                        </div>
                        <div class="form-group control-label">
                            <input type="password" id="pw2" placeholder="Confirm Password" autocomplete="false">
                            <br><span id="match"></span><br>
                        </div>
                        <div id="tnctext" style="color: black;">By Signing Up, You are agreeing with the site's <a href="#" data-toggle="modal" data-target="#TNC">Terms and Conditions</a></div>
                        <input type="submit" value="Sign-Up" id="block" style="color: black;">
                    </form>

                </div>
                <div class="modal-footer justify-content-center">
                    <span class="dialouge" style="color: black;">Already have an account?</span><button type="button" class="btn loginbtn" data-toggle="modal"
                        data-target="#Login" data-dismiss="modal"><span id="log" style="color:black;">Login</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Login">
    <div class="modal-dialog modal-dialog-centered modal-lg text-center">
        <div class="modal-content" id="modal2">
            <div class="modal-header">
                <div id="LogFirst" class="font-weight-bold"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="POST">
                    <div class="form-group control-label">
                        <input type="email" name="LogEmail" placeholder="E-mail" autocomplete="false">
                    </div>
                    <div class="form-group control-label">
                        <input type="password" name="LogPassword" placeholder="Password" autocomplete="false">
                    </div>
                    <input type="submit" value="Login" id="block2">
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <span class="dialouge" style="color: black;">Create an account?</span><button type="button" class="btn signinbtn" data-dismiss="modal"
                    data-toggle="modal" data-target="#Sign-Up"><span class="signbtntxt" style="color: black;">Sign-Up</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TNC">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable text-center">
            <div class="modal-content" id="modal2">
                <div class="modal-header">
                    <p class="font-weight-bold">Terms and Conditions</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body1">
                    <iframe src="TnC/TnC.html" frameborder="2" width="470px"></iframe>
                </div>
        </div>
    </div>
</div>


    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">"Indulge in the ultimate coffee adventure with The Best Coffee Testing Experience."</p>
            <p><a id="Home" href="#" data-toggle="modal" data-target="#Login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Check Now</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
              <p class="mb-4 mb-md-5">"Discover the perfect blend of Amazing Taste and Beautiful Place."</p>
              <p><a id="Home" href="#" data-toggle="modal" data-target="#Login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Check Now</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
              <p class="mb-4 mb-md-5">"Savor the warmth and richness of Creamy Hot and Ready to Serve perfection."</p>
              <p><a id="Home" href="#" data-toggle="modal" data-target="#Login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Check Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Coffee Shops</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Users</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Users</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Coffee</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

  <!-- footer -->
    <footer class="ftco-footer ftco-section img" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="overlay"></div>
    <div class="container" style="padding-left: 15px; padding-right: 15px;">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p style="font-size: 14px;">
                        At Café Crafts, we're fueled by our passion for coffee and our desire to share that passion with the world. Founded by three coffee-loving friends, Chailes, Joza, and Den, Café Crafts is more than just a website – it's a community.</p>
                    <div class="social d-flex justify-content-center">
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foottitle col-lg-6">
                <br>
                <br>
                <h1 style="font-size: 100px;">Café Crafts</h1>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">Give us your Feedback</h2>
                    <div class="block-23 mb-2">
                        <ul style="font-size: 14px;">
                            <li><span class="icon icon-map-marker"></span><span class="text">Pulilan, Bulacan</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+63 935 255 8376</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@cafécrafts.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-size: 12px;">Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
            </div>
        </div>
    </div>
</footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'wrongpassword') {
        echo '<script>alert("Incorrect password. Please try again.");</script>';
    } elseif ($_GET['error'] == 'emailnotfound') {
        echo '<script>alert("Email not found. Please check your input.");</script>';
    }
}
?>


<script>
    
$(document).ready(function() {
    // Check if email is already taken and display alert
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('emailTaken') && urlParams.get('emailTaken') === 'true') {
        alert('Email is already taken. Please choose a different email.');
    }
});


$('#Sign').click(function () {
    $("#LogFirst").html("Login");
});

$("#Home").click(function () {  
    $("#LogFirst").html("You need to login first to continue.");
});

$('#block').prop('disabled', true);

$('#pw1, #pw2').on('keyup', function () {
    if ($('#pw1').val().length >= 8 && $('#pw1').val() == $('#pw2').val() && $('#pw1').val().length > 0) {
        $('#match').html('Password matched').css('color', 'green');
        $('#block').prop('disabled', false).css('border','solid yellow 2px');
    } else {
        $('#match').html('Not Matching or too short (must be 8 characters)').css('color', 'red');
        $('#block').prop('disabled', true).css('border','solid red 2px');
    }
});


</script>