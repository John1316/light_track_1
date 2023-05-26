<?php
require_once('connectionproject.php');
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
<section class="page-title title-bg23" >
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Faculties</h2>
            <ul>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>Faculties</li><!--8yrha business major lw 3aml 7aga lel search-->
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
					<p> While choosing the right faculty is crucial for one's career path, it does not limit their potential to shift to another field in the future. Life is full of opportunities and possibilities, and one can always explore different options and make a career change if needed.
                            </p>
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
							
                            <a href="faculty_majors.php?faculty_id=<?php echo $result['faculty_id'] ?>" class="blog-btn">
									<img src="images/<?php echo $result['image'] ?>" alt="blog image" height="400" width="700">
                                </a>

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
        <!--
                <div class="blog-widget">
                    <h3>Popular Post</h3> dih 7od fihaa courses aw links lel other blogs

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
                        <div class="blog-details-img"> 7ot soura liha 3elaka bl it aw business
                            <img src="assetss/img/blog/faculty1.jpg" alt="blog details image"  height="400">
                        </div>
                -->
                        
                            
                
                                

                </div></div></div></section> 


 <!-- Footer Section Start -->
 <?php include('includes/footer.php') ?>
        
        <!-- Footer Section End -->
        
        <?php include('includes/scripts.php') ?>

</body>
</html>


        