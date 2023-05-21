<?php
require_once( 'connectionproject.php');
if(isset($_POST['submit'])){

   $fname = mysqli_real_escape_string($con, $_POST['firstname']);
   $lname = mysqli_real_escape_string($con, $_POST['lastname']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
   $pass = md5($_POST['pass']);
   $cpass = md5($_POST['cpass']);
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
         $error= 'your account added successfully.';
         header('location:signin_advisor.php');
   }

};

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
        <?php include('includes/footer.php') ?>
        
        <!-- Footer Section End -->
        
        <?php include('includes/scripts.php') ?>

  	</body>
</html>