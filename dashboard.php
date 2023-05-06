<?php 
	require_once('connectionproject.php');
    if(isset($_POST['accept_form'])){
        $consultation_id = $_POST['consultation_id'];

        $accept_con_stat = "UPDATE `consultations` SET `advisor_id`=".$_SESSION['advisor_id'].",`status`='1' WHERE `consultation_id`='$consultation_id'";
        $accept_q = mysqli_query($con , $accept_con_stat);
        if(!$accept_q){
            die('Error in acceptv'.mysqli_error($con) );
        }else{
            $accepted = "Accepted successfully";
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
        <?php include('includes/header.php') ?>
        <!-- Navbar Area End -->
        <!-- Page Title Start -->
        <section class="page-title title-bg5">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>
						Dashboard</h2>
                    <ul>
                        <li>
                            <a href="index.php">Dashbiard</a>
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
                        <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <!-- <th>Advisor Name</th> -->
                                                <th>Session Field</th>
                                                <th>Preferred Date</th>
                                                <th>Preferred Time</th>
                                                <th>Screenshot</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                            <?php 
                                                $consultation = "SELECT consultations.consultation_id, consultations.sub_id,consultations.user_id ,consultations.session_field, users.first_name ,consultations.preferred_date, consultations.preferred_time, consultations.screenshot, consultations.session_fees, consultations.status FROM consultations INNER JOIN users ON users.user_id = consultations.user_id WHERE consultations.sub_id =".$_SESSION['sub_id']." AND consultations.status = 0";  
                                                $consultation_query = mysqli_query($con, $consultation) or die('consultation_error'.mysqli_error($con));
                                                while($result = mysqli_fetch_array($consultation_query)){
                                                    if($result['status'] == 0){
                                                        $status= "<span class='btn btn-warning'>pending</span> ";
                                                    }
                                                ?>
                                               <tr>
                                                    <td class="text-bold-500">#<?php echo $result['consultation_id'] ?></td>
                                                    <td><?php echo $result['first_name'] ?></td>  
                                                    <!-- <td><?php echo $result['user_name'] ?></td> -->
                                                    <td><?php echo $result['session_field'] ?></td>  
                                                    <td style= "white-space:nowrap;text-overflow: ellipsis;
                                                    overflow: hidden;"  class="text-bold-500"><?php echo $result['preferred_date'] ?></td>
                                                    <td><?php echo $result['preferred_time'] ?></td>  
                                                    <td><?php echo $result['screenshot'] ?></td>  
                                                    <td><?php echo $result['session_fees'] ?></td>  
                                                    <td><?php echo $status ?></td> 
                                                    <td class="d-flex">
                                                   
                                                        <form method="post">
                                                            <input type="hidden" name="consultation_id" value="<?php echo $result['consultation_id'] ?>">
                                                            <button name="accept_form" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you sure you want to accept this consultation?')"><i class="bx bx-check font-medium-1"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <div id="update_concultation<?php echo $result['consultation_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="my-modal-title">Update Consultation</h5>
                                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST">
                                                                    <div class="row">
                                                                        <input type="hidden" name="consultation_id" id="consultation_id" value="<?php echo $result['consultation_id'] ?>" />
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="user_id">User Name</label>
                                                                                <select id="user_id" class="form-control" name="user_id" required>
                                                                                    <?php
                                                                                    $user_query = mysqli_query($con, "SELECT * FROM `users`");
                                                                                    while ($user_row = mysqli_fetch_assoc($user_query)) {
                                                                                        $selected = ($user_row['user_id'] == $result['user_id']) ? 'selected' : '';
                                                                                        echo "<option value='" . $user_row['user_id'] . "' " . $selected . ">" . $user_row['first_name'] . " " . $user_row['last_name'] . "</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="advisor_id">Advisor</label>
                                                                                <select id="advisor_id" class="form-control" name="advisor_id" required>
                                                                                    <?php
                                                                                    $advisors_query = "SELECT * FROM advisors";
                                                                                    $advisors_result = mysqli_query($con, $advisors_query);
                                                                                    while ($row = mysqli_fetch_assoc($advisors_result)) {
                                                                                        $selected = ($row['advisor_id'] == $result['advisor_id']) ? 'selected' : '';
                                                                                        echo '<option value="' . $row['advisor_id'] . '" ' . $selected . '>' . $row['name'] . '</option>';
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="session_field">Session Field</label>
                                                                                <input id="session_field" class="form-control" value="<?php echo $result['session_field'] ?>" type="text" name="session_field" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="preferred_date">Preferred Date</label>
                                                                                <input id="preferred_date" class="form-control" value="<?php echo $result['preferred_date'] ?>" type="date" name="preferred_date" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="preferred_time">Preferred Time</label>
                                                                                <input id="preferred_time" class="form-control" value="<?php echo $result['preferred_time'] ?>" type="time" name="preferred_time" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="screenshot">Screenshot</label>
                                                                                <input id="screenshot" class="form-control" value="<?php echo $result['screenshot'] ?>" type="text" name="screenshot" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="session_fees">Session Fees</label>
                                                                                <input id="session_fees" class="form-control" value="<?php echo $result['session_fees'] ?>" type="number" name="session_fees" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="status">Status</label>
                                                                                <select id="status" class="form-control" name="status" required>
                                                                                    <option value="pending">Pending</option>
                                                                                    <option value="confirmed" <?php if($result['status'] == 'confirmed') echo 'selected' ?>>Confirmed</option>
                                                                                    <option value="cancelled" <?php if($result['status'] == 'cancelled') echo 'selected' ?>>Cancelled</option>
                                                                                    </select>
                                                                                    </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" name="update_consultation" class="btn btn-primary">Update Consultation</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
							

								
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