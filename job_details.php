<?php
    require_once('functions/connection.php');
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
                            <a href="index.html">Home</a>
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

                    <div class="col-lg-8">
                        <div class="blog-dedails-text">
                            <div class="blog-details-img"><!--7ot soura liha 3elaka bl it aw business-->
                                <img src="images/<?php echo $result_details['image'] ?>" alt="blog details image">
                            </div>

                            <div class="blog-meta">
                                <ul>
									<li>
										<i class='bx bxs-user'></i>
										Admin
									</li>
									<li>
										<i class='bx bx-calendar'></i>
										7 Feb, 2021
									</li>
								</ul>
                            </div>

                            <h3 class="post-title"><?php echo $result_details['title'] ?></h3><!--dih mmkn tt8yr business-->
                            <h5>Description</h5>

                             <p><?php echo $result_details['description'] ?></p>


                            <div class="row"><!--7ot swr liha 3elaka bl job-->
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details2.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details3.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                            </div>

                            <h5 id="avg-salary">Technical skills:</h5><!--salary -->
                            <p>
                            <?php echo $result_details['technical_skills'] ?>
                            </p>

                            <h5>>Responsbility Of Each Job Titles:</h5>
                            <p> 
                            It's difficult to say which software developer/engineer job title is the most in demand, as the demand for these roles can vary depending on the industry, location, and company. However, according to various industry reports and job market analyses, some of the most in-demand software developer/engineer job titles in recent years have been:

                                <br><b>1. Full Stack Developer:</b> Full stack developers are increasingly in demand due to their ability to work on both front-end and back-end technologies. With the rise of web applications and the need for complex web development projects, full stack developers are becoming more essential in the tech industry.
                                
                                <br><b>2. DevOps Engineer:</b> DevOps engineers are in high demand due to the increasing adoption of cloud computing and agile software development methodologies. They are responsible for building and maintaining the infrastructure that supports software development and deployment, and ensuring that software can be delivered quickly and reliably.
                                
                                <br><b>3. Cybersecurity Specialist:</b> With the increasing frequency and sophistication of cyber attacks, the demand for cybersecurity specialists continues to grow. Professionals with skills in network security, threat detection, and incident response are particularly in demand.
                                
                                <br><b> 4. Data Analyst/Scientist:</b> With the explosion of data in recent years, the demand for data analysts and data scientists continues to grow. Professionals with skills in data analysis tools such as Excel, Python, and R, as well as data visualization tools such as Tableau and Power BI, are particularly in demand.
                                
                                <br><b> 5. Mobile Application Developer:</b> With the increasing use of mobile devices and the rise of mobile applications, the demand for mobile application developers continues to grow. Professionals with skills in mobile development platforms such as iOS and Android, as well as experience with mobile app development frameworks such as React Native or Xamarin, are particularly in demand.
                                
                                <br> Again, it's important to note that the demand for specific software developer/engineer job titles can vary depending on the industry and economic conditions. However, these job titles have been identified as some of the most in-demand in recent years.
                            </p>

                        
                        
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>


                        <div class="details-tag">
                            <ul>
                            <li>Tags:</li>
                            <li>
                            <a href="#soft-skills">Soft Skills</a>
                            </li>
                            <li>
                            <a href="#technical-skills">Technical Skills</a>
                            </li>
                            <li>
                            <a href="#avg-salary">Avarage Salary</a>
                            </li>
                            </ul>
                        </div>
                        </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details2.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/img/blog/blog-details3.jpg" class="details-inner-img" alt="blog details image">
                                </div>
                            </div>
                            <br>
                            <h5>>Related Courses</h5>

                             <p>Attending career-focused courses and sessions can enhance your knowledge and skills, making you more competitive in the job market. It can also demonstrate your commitment to professional growth, leading to better job opportunities and career advancement.</p>
                    
                            <section class="company-section company-style-two pt-100 pb-70">
                                <div class="container">
                                    
                                       
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="company-card">
                                                <div class="company-logo">
                                                    <a href="job-list.html">
                                                        <img src="assets/img/top-company/1.png" alt="company logo">
                                                    </a>
                                                </div>
                                                <div class="company-text">
                                                    <h3>course name</h3>
                                                    <p>
                                                        <i class='bx bx-location-plus'></i>
                                                        Green Lanes, London
                                                    </p>
                                                    <p>
                                                        <i class='bx bx-briefcase'></i>
                                                        course category
                                                    </p><p>
                                                        <i class='bx bx-dollar'></i>
                                                        price
                                                    </p>
                                                    <a href="job-list.html" class="company-btn">
                                                        brouse more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="company-card">
                                                <div class="company-logo">
                                                    <a href="job-list.html">
                                                        <img src="assets/img/top-company/1.png" alt="company logo">
                                                    </a>
                                                </div>
                                                <div class="company-text">
                                                    <h3>course name</h3>
                                                    <p>
                                                        <i class='bx bx-location-plus'></i>
                                                        Green Lanes, London
                                                    </p>
                                                    <p>
                                                        <i class='bx bx-briefcase'></i>
                                                        course category
                                                    </p><p>
                                                        <i class='bx bx-dollar'></i>
                                                        price
                                                    </p>
                                                    <a href="job-list.html" class="company-btn">
                                                        brouse more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="company-card">
                                                <div class="company-logo">
                                                    <a href="job-list.html">
                                                        <img src="assets/img/top-company/1.png" alt="company logo">
                                                    </a>
                                                </div>
                                                <div class="company-text">
                                                    <h3>course name</h3>
                                                    <p>
                                                        <i class='bx bx-location-plus'></i>
                                                        Green Lanes, London
                                                    </p>
                                                    <p>
                                                        <i class='bx bx-briefcase'></i>
                                                        course category
                                                    </p><p>
                                                        <i class='bx bx-dollar'></i>
                                                        price
                                                    </p>
                                                    <a href="job-list.html" class="company-btn">
                                                        brouse more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="company-card">
                                                <div class="company-logo">
                                                    <a href="job-list.html">
                                                        <img src="assets/img/top-company/1.png" alt="company logo">
                                                    </a>
                                                </div>
                                                <div class="company-text">
                                                    <h3>course name</h3>
                                                    <p>
                                                        <i class='bx bx-location-plus'></i>
                                                        Green Lanes, London
                                                    </p>
                                                    <p>
                                                        <i class='bx bx-briefcase'></i>
                                                        course category
                                                    </p><p>
                                                        <i class='bx bx-dollar'></i>
                                                        price
                                                    </p>
                                                    <a href="job-list.html" class="company-btn">
                                                        brouse more
                                                    </a>
                                                </div>
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