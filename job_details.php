<?php
require_once('connectionproject.php');
    include('functions/details.php');
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
        <!-- Page Title Start -->
        <section class="page-title title-bg22" >
            <div class="d-table">
                <div class="d-table-cell">
                    <h2><?php echo $result_details['title'] ?></h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li><?php echo $result_details['title'] ?></li><!--8yrha business major lw 3aml 7aga lel search-->
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
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <!-- -->
                    <div class="col-lg-4">



                        <div class="blog-widget blog-category">
                            <h3>Another jobs</h3>
                            <ul>

                            
                                <?php 
                                    $select_jobs ="SELECT * from `jobs` WHERE `job_id` != ".$_GET['job_id']."  LIMIT 5 ";
                                    $select_jobs_q = mysqli_query($con, $select_jobs) or die('ERROR on select'.mysqli_error($con));

                                    while($results = mysqli_fetch_array($select_jobs_q)) {

                                    
                                ?>
                                <li>
                                    <a href="job_details.php?job_id=<?= $results['job_id'] ?>"><?= $results['title'] ?></a>
                                </li>
                                <?php
                                    }
                                    ?>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="blog-dedails-text">
                            <div class="blog-details-img"><!--7ot soura liha 3elaka bl it aw business-->
                                <img src="images/<?php echo $result_details['image'] ?>" alt="blog details image">
                            </div>

                            
                            <h1 class="post-title"><?php echo $result_details['title'] ?></h1><!--dih mmkn tt8yr business-->
                           
                            <h6>Description & Respnsabilties</h6>
                             <p><?php echo htmlspecialchars_decode( $result_details['description'])?></p>

                            <h6>Soft skills</h6>
                             <p><?php echo htmlspecialchars_decode($result_details['soft_skills'])?></p>

                            <h6>Technical skills</h6>
                            <p><?php echo htmlspecialchars_decode( $result_details['technical_skills'])?></p>
                           
                            <h6>Average salary</h6>
                            <p><?php echo htmlspecialchars_decode($result_details['average_salary'])?></p>
                           
                            <h6>courses</h6>
                            <p><?php echo htmlspecialchars_decode( $result_details['courses'] )?></p>
                           

                           

                    
                      
                        </div>


                          <!--  <div class="row">
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details2.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details3.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                            </div> -->
                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                </div>
            </div>
        </section>
		<!-- Blog Details Section End --> 
        
        
        <!-- Footer Section Start -->
        <?php include('includes/footer.php') ?>
        <!-- Footer Section End -->

        <?php include('includes/scripts.php') ?>

</body>
</html>