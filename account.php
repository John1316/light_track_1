<?php
    require_once('connectionproject.php');
?>
<!doctype html>
<html lang="zxx">
    <head>
        <?php include('includes/head.php'); ?>
 
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
        <?php include('includes/header.php'); ?>
        <!-- Navbar Area End -->
        <!-- Page Title Start -->
        <section class="page-title title-bg10">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Account</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Account</li>
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

        <!-- Account Area Start -->
        <section class="account-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Advisor name</th>
                                    <th>Sub major name</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select_jobs ="SELECT consultations.* , advisors.name AS advisor_name , sub_majors.title AS sub_major_name FROM consultations INNER JOIN advisors ON advisors.advisor_id = consultations.advisor_id INNER JOIN sub_majors ON sub_majors.sub_id = consultations.sub_id WHERE user_id = ".$_SESSION['user_id']." ";
                                    $select_jobs_q = mysqli_query($con, $select_jobs) or die('ERROR on select'.mysqli_error($con));

                                    while($results = mysqli_fetch_array($select_jobs_q)) {
                                    if($results['status'] == 1){
                                        $status ="<span class='btn btn-success'>Accepted</span>";
                                    }else{
                                        $status ="<span class='btn btn-warning'>Waiting</span>";

                                    }
                                ?>
                                <tr>
                                    <td><?= $results['consultation_id'] ?></td>
                                    <td><?= $results['advisor_name'] ?></td>
                                    <td><?= $results['sub_major_name'] ?></td>
                                    <td><?= $status ?></td>
                                    <td><?= $results['email'] ?></td>
                                </tr>
                                <?php 
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->



        <!-- Footer Section Start -->
        <?php include('includes/footer.php'); ?>

        <!-- Footer Section End -->

        <!-- Back To Top Start -->

		<!-- Back To Top End -->

        <?php include('includes/scripts.php'); ?>

  	</body>
</html>