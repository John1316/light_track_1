<?php
require_once('functions/connection.php');

include('functions/advisors_authentication.php');
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

        <?php include('includes/header.php') ?>
        <?php if(isset($error)){ ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"><?php echo $error ?></h4>
            
        </div>
        <?php } ?>
        <?php if(isset($success)){ ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"><?php echo $success ?></h4>
            
        </div>
        <?php } ?>

        <!-- Page Title Start -->
        <section class="page-title title-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Thank you for being part of Light Track </h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li> advisor sign up</li>
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

        <!-- Post Job Section Start -->
        <div class="job-post ptb-100">
            <div class="container">
                <form class="job-post-from" method="POST">
                    <h2> Advisor sign up</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name </label>
                                <input type="text" class="form-control"  name="name" placeholder="enter your name" required>
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
                                <label>phone number</label>
                                <input type="tel" class="form-control"  name="phoneno" placeholder="enter your phone number" required>
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
                                <label>gender</label>
                                <select class="gender" name="gender">
                                    <option value="male">Male </option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>linkedin </label>
                                <input type="text" class="form-control"  name="linkedin" placeholder="enter your linkedin email">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bio</label>
                                <input type="text" class="form-control" name="bio" placeholder="enter your bio" required>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Availability</label>
                                <input type="varchar" class="form-control" name="availability" placeholder="enter your availability" required>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="post-btn" name="register_advisor">
                                sign up
                            </button>
                        </div>
                    </div>
                        
                        
                        
                </form>
                
            </div>
        </div>
        <!-- Post Job Section End -->
    
        <!-- Subscribe Section Start -->
        
        <!-- Subscribe Section End -->

        <?php include('includes/footer.php') ?>


        <?php include('includes/scripts.php') ?>

</body>
</html>