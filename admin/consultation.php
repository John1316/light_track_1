<?php
    require_once('functions/connectionproject.php');
    include('functions/consultation_function.php');
    if (!isset($_SESSION['admin_id'])){

    } 
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include('includes/head.php') ?>


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <?php include('includes/navbar.php') ?>


    <!-- BEGIN: Main Menu-->
    <?php include('includes/sidebar.php') ?>

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Consultation
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" admin_id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Consultation</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_consultation">Add Consultation</button>

                                        <?php if(isset($inserted)) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <strong><?php echo $inserted ?></strong>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($deleted)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong><?php echo $deleted ?></strong>
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($updated)) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <strong><?php echo $updated ?></strong>
                                        </div>
                                        <?php } ?>
                                        <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User Name</th>
                                                <th>Advisor Name</th>
                                                <th>Session Field</th>
                                                <th>Preferred Date</th>
                                                <th>Preferred Time</th>
                                                <th>Screenshot</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                            <?php 
                                                $consultation = "SELECT consultations.consultation_id, consultations.user_id ,  advisors.advisor_id, advisors.name as advisor_name, CONCAT(users.first_name, ' ', users.last_name) as user_name, consultations.session_field, consultations.preferred_date, consultations.preferred_time, consultations.screenshot, consultations.session_fees, consultations.status 
                                                FROM consultations 
                                                INNER JOIN users ON users.user_id = consultations.user_id 
                                                INNER JOIN advisors ON advisors.advisor_id = consultations.advisor_id;";  
                                                $consultation_query = mysqli_query($con, $consultation) or die('consultation_error'.mysqli_error($con));
                                                while($result = mysqli_fetch_array($consultation_query)){
                                                ?>
                                               <tr>
                                                    <td class="text-bold-500">#<?php echo $result['consultation_id'] ?></td>
                                                    <td><?php echo $result['user_name'] ?></td>
                                                    <td><?php echo $result['advisor_name'] ?></td>  
                                                    <td><?php echo $result['session_field'] ?></td>  
                                                    <td style= "white-space:nowrap;text-overflow: ellipsis;
                                                    overflow: hidden;"  class="text-bold-500"><?php echo $result['preferred_date'] ?></td>
                                                    <td><?php echo $result['preferred_time'] ?></td>  
                                                    <td><?php echo $result['screenshot'] ?></td>  
                                                    <td><?php echo $result['session_fees'] ?></td>  
                                                    <td><?php echo $result['status'] ?></td> 
                                                    <td class="d-flex">
                                                    <button data-toggle="modal" data-target="#update_concultation<?php echo $result['consultation_id'] ?>" class="pl-0 btn btn-transparent"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>
                                                        <form method="post">
                                                            <input type="hidden" name="consultation_id" value="<?php echo $result['consultation_id'] ?>">
                                                            <button name="delete_consultation" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you sure you want to delete this consultation?')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div id="add_consultation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Add Consultation</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        <div  class="col-12">
                            <div class="form-group">
                                <label for="user_id">User Name</label>
                                <select id="user_id" class="form-control" name="user_id" required>
                                    <?php
                                    $user_query = mysqli_query($con, "SELECT * FROM `users`");
                                    while ($user_row = mysqli_fetch_assoc($user_query)) {
                                        echo "<option value='" . $user_row['user_id'] . "'>" . $user_row['first_name'] . " " . $user_row['last_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="advisor_name">Advisor Name</label>
                                <select id="advisor_name" class="form-control" name="advisor_id" required>
                                    <?php
                                    $advisors_query = mysqli_query($con, "SELECT advisor_id, name FROM advisors");
                                    while ($row = mysqli_fetch_assoc($advisors_query)) {
                                        echo '<option value="' . $row['advisor_id'] . '">' . $row['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="session_field">Session Field</label>
                                <select id="session_field" class="form-control" name="session_field" required>
                                    <option value="">Select a sub-major</option>
                                    <?php
                                    $sub_majors_query = mysqli_query($con, "SELECT * FROM sub_majors");
                                    while($sub_major = mysqli_fetch_assoc($sub_majors_query)) {
                                        echo "<option value='" . $sub_major['sub_id'] . "'>" . $sub_major['title'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="preferred_date">Preferred Date</label>
                                <input id="preferred_date" class="form-control" type="date" name="preferred_date" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="preferred_time">Preferred Time</label>
                                <input id="preferred_time" class="form-control" type="time" name="preferred_time" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="screenshot">Screenshot</label>
                                <input id="screenshot" class="form-control" type="text" name="screenshot" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="session_fees">Session Fees</label>
                                <input id="session_fees" class="form-control" type="number" name="session_fees" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status" required>
                                    <option value="0">Pending</option>
                                    <option value="1">Accepted</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" name="add_consultation" class="btn btn-primary">Add Consultation</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include('includes/footer.php') ?>

 
    <?php include('includes/scripts.php') ?>

</body>
<!-- END: Body-->

</html>