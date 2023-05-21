<?php
require_once('connectionproject.php');
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
   $subject = mysqli_real_escape_string($con, $_POST['subject']);
   $message = mysqli_real_escape_string($con, $_POST['message']);
 

 
  $query="INSERT INTO feedback (`name`,`email`,`phone_no`,`subject`,`message`) VALUES('$name','$email','$phone_no','$subject','$message')";
  mysqli_query($con,$query);



   $error= 'your feedback were sent successfully, please check your mail from time to time, because you will be answered as soon as possible and you are welcomed.';

}
?>

<!doctype html>
<html lang="zxx">
    <head>
    <?php include('includes/head.php') ?>
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
        
              <!-- Navbar Area Start -->
		<?php include('includes/header.php') ?>
        
        <!-- Page Title Start -->
        <section class="page-title title-bg23">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="home.php">Home</a>
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
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                            <h5 class="mb-0"><?= $error?></h5>
                            
                        </div>
                        <?php } ?>
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
                                    <input type="number" name="phone_no" id="phone_no" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">
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
                                <button type="submit" name="submit" class="default-btn contact-btn">
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
  <?php include('includes/footer.php') ?>
        
        <!-- Footer Section End -->
        
        <?php include('includes/scripts.php') ?>

</body>
</html>