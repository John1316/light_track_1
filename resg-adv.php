<?php
require_once('connectionproject.php');


if(isset($_POST['submit'])){
    $sub_id = $_POST['sub_id'];
    // $session_field = $_POST['session_field'];
    // $session_field = $_POST['email'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $screenshot_name = time() .'-' . $_FILES['screenshot']['name'];
    $target_dir = 'images/';
    $target_base = $target_dir . basename($screenshot_name);
    move_uploaded_file($_FILES['screenshot']['tmp_name'], $target_base);
    // $session_fees = $_POST['session_fees'];

    $insert_consultation = "INSERT INTO `consultations` (`user_id`,`sub_id`, `preferred_date`, `preferred_time`, `screenshot`, `session_fees`, `status`) VALUES(".$_SESSION['user_id'].", '$sub_id', '$preferred_date', '$preferred_time', '$screenshot_name', '250', '0')";
    $consultation_query = mysqli_query($con, $insert_consultation) or die('Error in insert'.mysqli_error($con));

    if(!$consultation_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "Consultation added successfully";
    }
}
?>
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="assets/css/boxicon.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">        
        <!-- Title CSS -->
        <title>Light Track - Career guidance</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">  
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
                <a href="index-four.html" class="logo">
                    <img src="assets/img/logo.png" alt="logo" height="45px">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <?php include('includes/header.php') ?>

        <!-- Navbar Area End -->
<!-- Page Title Start -->
<section class="page-title title-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Reservation Consultation</h2>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>Reservation Consultation</li>
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
<section class="discover-section pb-100">
    <div class="container">
       <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="discover-img">
                    <img src="assets/img/home/5.jpg" alt="discover image" width="485px" height="400px">
                </div>
            </div>

            <form class="job-post-from col-lg-6" method="POST" enctype="multipart/form-data">
                <h2>Fill Up Your Booking</h2>
                <div class="row">
                    <div class="container">
                        <div class="row align-items-center">
                        <div class="form-group">
                            
                            
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="exampleInput2" name="name" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    
                            
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="exampleInput2" name="email" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Enter date of the consultation</label>
                            <input type="date" class="form-control" id="exampleInput3" name="preferred_date"  required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>choose time </label>
                            <input type="time" class="form-control" id="exampleInput2" name="preferred_time" required>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Screenshot of payment</label>
                            <input type="file" class="form-control" id="exampleInput2" name="screenshot" required>
                        </div>
                    </div> 

                    <div class="col-12">
                                <div class="form-group">
                                    <label for="sub_id">Sub Majors</label>
                                    <select id="sub_id" class="form-control" type="text" name="sub_id" required>
                                        <option value="">Select sub major</option>
                                        <?php
                                        $sub_majors = "SELECT * FROM sub_majors";
                                        $sub_majors_query = mysqli_query($con, $sub_majors) or die('sub_majors_error' . mysqli_error($con));


                                        while ($sub_majors_result = mysqli_fetch_array($sub_majors_query)) {


                                        ?>
                                            <option value="<?php echo $sub_majors_result['sub_id'] ?>"><?php echo $sub_majors_result['title'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                    


                    </div> 
                        </div></div></div>
    
                        <div class="col-md-12 text-center">
                            <?php if(isset($_SESSION['user_id'])) { ?>
                        <button type="submit" class="post-btn" name="submit">
                            book now
                        </button>
                        <?php } else { ?>
                            <a href="signin_user.php" class="post-btn">
                            book now
                        </a>
                            <?php } ?>
                    </div>
                    <p><br>we will send the confirmation message by email or phone number ,so please check it within the 24h</p>
 
            </form>
               



       </div></div></section>

        
  <!-- Footer Section Start -->
  <footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="logo">
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Subscriber Form JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Velidation JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact Form -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/meanmenu.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
</body>
</html>