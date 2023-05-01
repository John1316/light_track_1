<?php
require_once('functions/connection.php');
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
                <a href="index.php" class="logo">
                    <img src="assetss/img/logo.png" alt="logo" height="45px">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index-four.html">
                            <img src="assetss/img/logo.png" alt="logo" class="img-fluid">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                <a href="index.php" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>     
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">Events</a>
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
                                            <a href="majors.php" class="nav-link">Career path</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Job titles</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href  ="faculty.php" class="nav-link">Faculty</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                            <div class="other-option">
                                <a href="sign-up.php" class="signup-btn">Sign Up</a>
                                <a href="sign-in.php" class="signin-btn">Sign In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar Area End -->
<!-- Page Title Start -->
<section class="page-title title-bg23" >
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Faculty</h2>
            <ul>
                <li>
                    <a href="index-four.html">Home</a>
                </li>
                <li>Faculty</li><!--8yrha business major lw 3aml 7aga lel search-->
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
<!-- Blog Details Section Start -->
<section class="blog-section blog-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Select faculty</h2>
					<p>Selecting the faculty you are need more information about it.</p>
				</div>

				<div class="row">
					<?php 
					$faculty = "SELECT * FROM `faculties`";
					$faculty_query = mysqli_query($con, $faculty) or die('Error in mysql'. mysqli_error($con));
					while($result = mysqli_fetch_array($faculty_query)){
					?>
					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							
							<div class="blog-text">
							

								<h3>
									<?php echo $result['name'] ?>
									
								</h3>

								<a href="faculty_majors.php?faculty_id=<?php echo $result['faculty_id'] ?>" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>
					<?php
					}
					?>

                <div class="blog-widget">
                    <h3>Popular Post</h3><!--dih 7od fihaa courses aw links lel other blogs-->

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post1.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">May 8, 2021</time>
                            <h4>
                                <a href="blog-details.html">Looking for Highly Motivated Product to Build</a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post2.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">May 5, 2021</time>
                            <h4>
                                <a href="blog-details.html">
                                    How to Indroduce in Yourself in Job Interview?
                                </a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post3.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">April 20, 2021</time>
                            <h4>
                                <a href="blog-details.html">
                                    most wanted IT careers
                                </a>
                            </h4>                                
                        </div>
                    </article>

                    <article class="popular-post">
                        <a href="blog-details.html" class="blog-thumb">
                            <img src="assetss/img/blog/popular-post4.jpg" alt="blog image">
                        </a>

                        <div class="info">
                            <time datetime="2021-04-08">April 28, 2021</time>
                            <h4>
                                <a href="blog-details.html">
                                    highest salary out of all it majors
                                </a>
                            </h4>                                
                        </div>
                    </article>
                </div>
                
                
                <div class="blog-widget blog-category">
                    
                </div>

            </div>
                <div class="col-lg-8">
                    <div class="blog-dedails-text">
                        <div class="blog-details-img"><!--7ot soura liha 3elaka bl it aw business-->
                            <img src="assetss/img/blog/faculty1.jpg" alt="blog details image"  height="400">
                        </div>

                        
                            
                <h3 class="post-title">Faculty</h3>
              <!--mt8yrsh el p dh-->  <p>The transition from high school to college is also significant as it marks a student's entry into adulthood and independence. College provides students with a platform to explore and discover their interests, develop critical thinking skills, and prepare for their future careers.</p>
                            <h5>> Name of faculty</h5><!--tt8yr b esm el faculty-->
                                <h5 >>Description :</h5><!--dih sbtha wli t7tha yt8yr 3ala 7sb el jobw yb2a diha desc lkol job titles-->
                            <p>
                            <!--decription of faculty--> There can be differences in the education and degree requirements for different software developer/engineer job titles, depending on the company and the specific role. Here's a general overview of the education and degree requirements for some of the job titles you listed <a href="college.html" class="link-danger"> know more about college degrees</a>:
                            </p>

                            <h5>>Job fields:</h5>
                            <p> <!--job field-->
                             <!--mt8yrsh el p dh-->   While choosing the right faculty is crucial for one's career path, it does not limit their potential to shift to another field in the future. Life is full of opportunities and possibilities, and one can always explore different options and make a career change if needed.
                            </p>
                            <p>
                                <br><b>1. Full Stack Developer:</b> Full stack developers are increasingly in demand due to their ability to work on both front-end and back-end technologies. With the rise of web applications and the need for complex web development projects, full stack developers are becoming more essential in the tech industry.
                                
                                <br><b>2. DevOps Engineer:</b> DevOps engineers are in high demand due to the increasing adoption of cloud computing and agile software development methodologies. They are responsible for building and maintaining the infrastructure that supports software development and deployment, and ensuring that software can be delivered quickly and reliably.
                                
                                <br><b>3. Cybersecurity Specialist:</b> With the increasing frequency and sophistication of cyber attacks, the demand for cybersecurity specialists continues to grow. Professionals with skills in network security, threat detection, and incident response are particularly in demand.
                                
                                <br><b> 4. Data Analyst/Scientist:</b> With the explosion of data in recent years, the demand for data analysts and data scientists continues to grow. Professionals with skills in data analysis tools such as Excel, Python, and R, as well as data visualization tools such as Tableau and Power BI, are particularly in demand.
                                
                                <br><b> 5. Mobile Application Developer:</b> With the increasing use of mobile devices and the rise of mobile applications, the demand for mobile application developers continues to grow. Professionals with skills in mobile development platforms such as iOS and Android, as well as experience with mobile app development frameworks such as React Native or Xamarin, are particularly in demand.
                                
                                <br> Again, it's important to note that the demand for specific software developer/engineer job titles can vary depending on the industry and economic conditions. However, these job titles have been identified as some of the most in-demand in recent years.
                            </p>

                                

                </div></div></div></section>


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


        