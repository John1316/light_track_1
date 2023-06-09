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
          <?php include('includes/footer.php') ?>
        
        <!-- Footer Section End -->
        
        <?php include('includes/scripts.php') ?>

  	</body>
</html>