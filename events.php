<?php 
	require_once('connectionproject.php')

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
        <?php include('includes/header_1.php') ?>
        <!-- Navbar Area End -->
        <!-- Page Title Start -->
        <section class="page-title title-bg5">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>
						Events</h2>
                    <ul>
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                       
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

		        <!-- Job Section End -->   
				<section class="job-style-two job-list-section pt-100 pb-70">
					<div class="container">
						<div class="section-title text-center">
							<h1> Events You May Be Interested In</h1>
							<p>Attending career-related events and sessions can be crucial for professional development. They provide opportunities to network, learn new skills, and stay up-to-date on industry trends, which can ultimately help advance your career</p>
						</div>
		
						<div class="row">
							<?php 
								$events_stat = "SELECT * FROM `events`";
								$events_query = mysqli_query($con, $events_stat) or die('Error in evenbts'.mysqli_error());
								// $result = mysqli_fetch_array($events_query);
								while($result = mysqli_fetch_array($events_query)){

								

								?>
									<div class="col-lg-12">
										<div class="job-card-two">
											<div class="row align-items-center">
												<div class="col-md-1">
														
														<img src="images/<?php echo $result['event_image'] ?>" alt="logo" height="100px" width="700">
												</div>
												<div class="col-md-8">
													<div class="job-info">
														<h3>
															<a href="https://www.facebook.com/events/609049797584972"><?php echo $result['event_name'] ?></a>
														</h3>
														<h3>
									
								<td width='80' style='text-align:center;'>
									<h6><?php echo $result['introduction'] ?></h6>
					           </td>
								</h3>

													</div>
												</div>
												<div class="col-md-3">
													<div class="theme-btn text-end">
														<a target="_blank" href="<?php echo $result['event_link'] ?>" class="default-btn">
															Browse more
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php
								}
								?>
							

								
							</div>
		
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
										<i class='bx bx-chevrons-left bx-fade-left'></i>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link active" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">
										<i class='bx bx-chevrons-right bx-fade-right'></i>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</section>
				<!-- Job Section End -->  
    
    
                <?php include('includes/footer.php') ?>
				<?php include('includes/scripts.php') ?>

  	</body>
</html>