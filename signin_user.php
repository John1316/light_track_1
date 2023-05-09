<?php
require_once( 'connectionproject.php');
if(isset($_POST['submit'])){

 
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, $_POST['pass']);

   $select = " SELECT * FROM `users` WHERE email = '$email' && password= '$pass' ";
   $result = mysqli_query($con, $select);
   if (!$result) {
    die('check as something went wrong in the sql statement');
} else {

  if(mysqli_num_rows($result)==1){

	  while($row = mysqli_fetch_array($result) ){
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone_no'] = $row['phone_no'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['birthdate'] = $row['birthdate'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['statues'] = $row['statues'];
	  }
   // $row = mysqli_= fetch_array($result);
    header("location: index.php");
 }else{
    $error= 'incorrect email or password!';
 }
};    
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
        <title>Jovie - Job Board & Portal HTML Template</title>
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
  <?php include('includes/header.php') ?>
        
        <!-- Page Title Start -->
        <section class="page-title title-bg12">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Sign In</h2>
                    <ul>
                        <li>
                            <a href="index-four.html">Home</a>
                        </li>
                        <li>Sign In</li>
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

        <!-- Sign In Section Start -->
        <div class="signin-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                            <h5 class="mb-0"><?= $error?></h5>
                            
                        </div>
                        <?php } ?>
                        <form method="POST" class="signin-form">
                        
                            <div class="form-group">
                                <label> Enter your Email </label>
                                <input type="text" class="form-control"  name="email" placeholder="enter your email" required>
                            </div>

                            <div class="form-group">
                                <label> Enter your Password </label>
                                <input type="password" class="form-control"  name="pass" placeholder="enter your password" required>
                            </div>

                            <div class="signin-btn text-center">
                                <button type="submit" name=submit>Sign In</button>
                            </div>

                            <div class="other-signin text-center">
                            <!--    <span>Or sign in with advisor</span> -->
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-google'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="create-btn text-center">
                                <p>Not have an account?
                                    <a href="sign-up.php">
                                        Create an account
                                        <i class='bx bx-chevrons-right bx-fade-right'></i>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
        <!-- Sign In Section End -->

        <!-- Subscribe Section Start -->
       
        <!-- Subscribe Section End -->

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