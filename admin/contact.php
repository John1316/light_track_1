<?php
require_once( 'connectionproject.php');
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
   $subject = mysqli_real_escape_string($con, $_POST['subject']);
   $message = mysqli_real_escape_string($con, $_POST['message']);
 

 
  $query="INSERT INTO feedback VALUES('$name','$email','$phone_no','$subject','$message')";
  mysqli_query($con,$query);
}
?>
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assetss/css/bootstrap.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assetss/css/owl.carousel.min.css">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="assetss/css/owl.theme.default.min.css">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="assetss/css/boxicon.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="assetss/fonts/flaticon/flaticon.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assetss/css/magnific-popup.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assetss/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assetss/css/nice-select.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assetss/css/style.css">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="assetss/css/dark.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assetss/css/responsive.css">        
        <!-- Title CSS -->
        <title>Light Track - Career guidance</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assetss/img/favicon.png">  
    </head>

    <body>
        
        <!-- Pre-loader Start -->
		<div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->

        <!-- Navbar Area Start -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assetss/img/logo.png" alt="logo" height="45px">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assetss/img/logo.png" alt="logo" class="img-fluid">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index-four.html" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>     
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.html" class="nav-link">events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="courses.html" class="nav-link">courses</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">advisor consultent</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="adv.html" class="nav-link">advisors</a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a href="resg-adv.html" class="nav-link">registration advisor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Majors</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-two.html" class="nav-link">Career path</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">job titles</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact Us</a>
                                </li>
                                </li>
                            </ul>
                            <div class="other-option">
                                <a href="sign-up.html" class="signup-btn">Sign Up</a>
                                <a href="sign-in.html" class="signin-btn">Sign In</a>
                            </div>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->
        <!-- Page Title Start -->
        <section class="page-title title-bg23">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Contact Section Start -->
        <div class="contact-card-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="contact-card">
                                    <i class='bx bx-phone-call'></i>
                                    <ul>
                                        <li>
                                            <a href="tel:+145664474574">
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+0224593597">
                                                +0224593597
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="col-md-4 col-sm-6">
                                <div class="contact-card">
                                    <i class='bx bx-mail-send' ></i>
                                    <ul>
                                        <li>
                                        
                                        </li>
                                        <li>
                                            <a href="mailto:LightTrack2023@gmail.com">
                                                LightTrack2023@gmail.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                                <div class="contact-card">
                                    <i class='bx bx-location-plus' ></i>
                                    <ul>
                                        <li>
                                            Masr El Gedida, Cairo, Egypt
                                        </li>
                                        <li>
                                         
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Contact Form Start -->
        <section class="contact-form-section pb-100">
            <div class="container">
                <div class="contact-area">
                    <h3>Lets' Talk With Us</h3>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone_no" id="number" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control message-field" id="message" cols="30" rows="7" required data-error="Please type your message" placeholder="Write Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn contact-btn" name="submit">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->

        <!-- Footer Section Start -->
		<footer class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html">
									<img src="assetss/img/logo.png" alt="logo">
								</a>
							</div>

							<p>Our idea aims to provide a platform that contains a full experience regarding the service of wanting information directed towards a certain career path.</p>

							<div class="footer-social">
								<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
							</div>
						</div>
					</div>

					

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-60">
							<h3>Quick Links</h3>
							<ul>
								<li>
									<a href="index-four.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Home
									</a>
								</li>
								<li>
									<a href="about.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										About
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bx-chevrons-right bx-tada'></i>
										services
									</a>
								</li>
								<li>
									<a href="blog-details.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										IT majors
									</a>
								</li>
								<li>
									<a href="blog-details.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										business majors
									</a>
								</li>
								<li>
									<a href="contact.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Contact
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget footer-info">
							<h3>Information</h3>
							<ul>
								<li>
									<span>
										<i class='bx bxs-phone'></i>
										Phone:
									</span>
									<a href="tel:882569756">
										+0224593597
									</a>
								</li>

								<li>
									<span>
										<i class='bx bxs-envelope'></i>
										Email:
									</span>
									<a href="mailto:info@jovie.com">
                                        LightTrack2023@gmail.com
									</a>
								</li>

								<li>
									<span>
										<i class='bx bx-location-plus'></i>
										Address:
									</span>
                                    Masr El Gedida, Cairo, Egypt
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <div class="copyright-text text-center">
            <p>Copyright © 2023  <a href="https://hibootstrap.com/" target="_blank"> Light Track </a> All rights reserved </p>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- Back To Top End -->

		<!-- jQuery first, then Bootstrap JS -->

		<script src="assetss/js/jquery.min.js"></script>
		<script src="assetss/js/bootstrap.bundle.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="assetss/js/owl.carousel.min.js"></script>
		<!-- Nice Select JS -->
		<script src="assetss/js/jquery.nice-select.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="assetss/js/jquery.magnific-popup.min.js"></script>
		<!-- Subscriber Form JS -->
		<script src="assetss/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Velidation JS -->
		<script src="assetss/js/form-validator.min.js"></script>
		<!-- Contact Form -->
		<script src="assetss/js/contact-form-script.js"></script>
		<!-- Meanmenu JS -->
		<script src="assetss/js/meanmenu.js"></script>
		<!-- Custom JS -->
		<script src="assetss/js/custom.js"></script>

</body>
</html>