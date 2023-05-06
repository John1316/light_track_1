<?php
require_once( 'connectionproject.php');
if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($con, $_POST['firstname']);
   $lname = mysqli_real_escape_string($con, $_POST['lastname']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
   $pass = mysqli_real_escape_string($con, $_POST['pass']);
   $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
   $address = mysqli_real_escape_string($con, $_POST['address']);
   $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
   $gender = mysqli_real_escape_string($con, $_POST['gender']);
   $status = mysqli_real_escape_string($con, $_POST['status']);


   $select = " SELECT * FROM `users` WHERE email = '$email'";
   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

    $error= 'user already existed';

   }else{

      if($pass != $cpass){
         $error= 'password not matched!';
      }else{
         $insert = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone_no`, `password`, `confirm_password`, `address`, `birthdate`, `gender`, `statues`)VALUES('$fname','$lname','$email','$phoneno','$pass','$cpass','$address','$birthdate','$gender','$status')";
         mysqli_query($con, $insert);
         $error= 'your account added successfully';
         header("location: signin_user.php");

    
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
        <title>Light Track</title>
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
              <!-- Navbar Area Start -->
		<?php include('includes/header_1.php') ?>
        <!-- Page Title Start -->
        <section class="page-title title-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>take your first step to achieve your  dream career </h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>sign up</li>
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

        <!-- begin form -->
        <div class="job-post ptb-100">
            <div class="container">
                <form method="POST" class="job-post-from">
                    <h2>User sign up</h2>
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                            <h5 class="mb-0"><?= $error?></h5>
                            
                        </div>
                        <?php } ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fisrt name </label>
                                <input type="text" class="form-control" name="firstname"  placeholder="enter your first name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last name </label>
                                <input type="text" class="form-control" name="lastname" placeholder="enter your first name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>birthdate</label>
                                <input type="date" class="form-control"  name="birthdate" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>email </label>
                                <input type="text" class="form-control"  name="email" placeholder="enter your email" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password </label>
                                <input type="password" class="form-control"  name="pass" placeholder="enter your password" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>confirm password </label>
                                <input type="password" class="form-control"  name="cpass" placeholder="confirm your password" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>phone number</label>
                                <input type="tel" class="form-control"  name="phoneno" placeholder="enter your phone number" required>
                            </div>
                        </div>

                        
                        

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>address</label>
                                <input type="text" class="form-control" name="address" placeholder="enter your adress" required>
                            </div>
                        </div>

                       

                        
                    
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>gender</label>
                                <select class="gender" name="gender" required>
                                    <option value="">Select gender</option>
                                    <option data-display="male">male </option>
                                    <option value="1">female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>status</label>
                                <select class="category" name="status" required>
                                   <option value="" >Select your status</option>
                                    <option value="employed">employed</option>
                                    <option value="college student">college student</option>
                                    <option value="fresh graduate">fresh graduate</option>
                                    <option value="school student">school student</option>
                                    <option value="unemployed">unemployed</option>
                                    <option value="looking for shift career">looking for shift career</option>
                                </select>
                            </div>
                        </div>

                       <br>
                       <br>
                        
                        <div class="col-md-6 text-center">
                            <button type="submit" class="post-btn" name="submit">
                                sign up
                            </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button  type="submit" class="post-btn" name="submit">
                            <a href="signin_user.php" style="color: aliceblue;"> already have an account</a>
                            </button>
                        </div>
                </form>
            </div>
        </div>
        <!-- Post Job Section End -->
    
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