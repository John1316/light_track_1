<?php
require_once('connectionproject.php');


if(isset($_POST['submit'])){
    $sub_id = $_POST['sub_id'];
    // $session_field = $_POST['session_field'];
    $email = $_POST['email'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $type = $_POST['type'];
    $screenshot_name = time() .'-' . $_FILES['screenshot']['name'];
    $target_dir = 'images/';
    $target_base = $target_dir . basename($screenshot_name);
    move_uploaded_file($_FILES['screenshot']['tmp_name'], $target_base);
    // $session_fees = $_POST['session_fees'];
    
    $insert_consultation = "INSERT INTO `consultations` (`user_id`,`sub_id`,`email`, `preferred_date`, `preferred_time`, `screenshot`,`type` ,`session_fees`, `status`) VALUES(".$_SESSION['user_id'].", '$sub_id','$email', '$preferred_date', '$preferred_time', '$screenshot_name','$type', '250', '0')";
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
                <a href="index.php" class="logo">
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
                <h1>Fill Up Your Booking</h>
              <h6>All sessions till now with 250LE</h6>
                <div class="row">
                    <div class="container">
                        <div class="row align-items-center">
                        <div class="form-group">
                        <?php if(isset($inserted)) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <strong><?php echo $inserted ?></strong>
                                        </div>
                                        <?php } ?> 
                            
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
                                    <label>Type of meeting</label>
                                    <select class="form-control" type="text" name="type" required>
                                    <option value="">Select type of meeting</option>
                                    <option data-display="online meeting">Online meeting</option>
                                    <option value="offline meeting">Offline meeting</option>
                                    <option value="Individual">Individual</option>
                                    </select>
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
                    <p><br>we will send the confirmation message by email or phone number ,so please check it within the 24h.</p>
                    <p>or check your profile to view your acceptence from advisor.</p>
 
            </form>
               



       </div></div></section>

        
       <?php include('includes/footer.php') ?>
        
        <!-- Footer Section End -->
        
        <?php include('includes/scripts.php') ?>

</body>
</html>