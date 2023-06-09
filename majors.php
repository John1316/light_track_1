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

        <!-- Navbar Area End -->
        <!-- Page Title Start -->
        <section class="page-title title-bg21">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>majors</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>majors</li>
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

		<!-- Blog Section Start -->
		<section class="blog-section blog-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Select major</h2>
					<p>Selecting the appropriate career path, whether in business or IT, is crucial for achieving long-term professional success, job contentment, and personal fulfillment in life.</p>
				</div>

				<div class="row">
					<?php 
					$majors = "SELECT * FROM `majors`";
					$majors_query = mysqli_query($con, $majors) or die('Error in mysql'. mysqli_error($con));
					while($result = mysqli_fetch_array($majors_query)){
					?>
					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-text">
							<a  href="sub_majors.php?major_id=<?php echo $result['major_id'] ?>" class="blog-btn">
									<img src="images/<?php echo $result['image'] ?>" alt="blog image" height="400" width="700">
                                </a>

								<h3>
									
								<td width='80' style='text-align:center;'>
									<?php echo $result['title'] ?>
					           </td>
								</h3>

								<a href="sub_majors.php?major_id=<?php echo $result['major_id'] ?>" class="blog-btn">
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
					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="assets/img/blog/2.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
							

								<h3>
									<a href="blog-details.html">
										IT major
									</a>
								</h3>
								<p>IT careers involve working with computers to manage data and provide technical support. They require strong analytical and problem-solving skills, and offer high earning potential and growth opportunities. IT professionals work in areas such as software development, cybersecurity, or network architecture</p>

								<a href="blog-details.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="assets/img/blog/3.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">

								<h3>
									<a href="blog-details.html">
										Choosing college
									</a>
								</h3>
								<p>Choosing the right college can be crucial in achieving your dream career. A good college can provide the necessary education, skills, and connections to succeed in your chosen field. It's important to research and consider factors such as program offerings, faculty, and career services when selecting a college.</p>

								<a href="blog-details.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="job-student.html">
									<img src="assets/img/blog/4.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
								<h3>
									<a href="job-student.html">
										How to Work While Still In College
									</a>
								</h3>
								<p>
									College students in Egypt have part-time job options. Balance work and studies by prioritizing, communicating, being realistic, and scheduling
								</p>

								<a href="job-student.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="tips-success.html">
									<img src="assets/img/blog/5.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
								

								<h3>
									<a href="tips-success.html">
										Tips For Success That Will Help You Accomplish Your Career Goals
									</a>
								</h3>
								<p>These seven tips for success can help anyone advance their career and find fulfillment in their personal life.</p>

								<a href="tips-success.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div> -->

					
                </div>
                
                
			</div>
		</section>
		<!-- Blog Section End -->        

        <!-- Subscribe Section Start -->

        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
		<?php include('includes/footer.php') ?>
		<?php include('includes/scripts.php') ?>

  	</body>
</html>