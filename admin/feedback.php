<?php
    require_once('functions/connectionproject.php');
    include('functions/feedback_function.php');
    if (!isset($_SESSION['admin_id'])){

        header("Location: index.php");
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
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Feedbacks
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Feedbacks</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                    <?php if(isset($deleted)) { ?>
                                  <div class="alert alert-danger" role="alert">
                                  <strong><?php echo $deleted ?></strong>
                                  </div>
                                  <?php } ?>
                                        
                                        <table class="table">
                                            <thead>
                                                <tr> 
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $feedback = "SELECT * FROM `feedback`";
                                                $user_query = mysqli_query($con, $feedback) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($user_query)){

                                                
                                                ?>
                                                <tr>
                                                <td class="text-bold-500">#<?php echo $result['id'] ?></td>
                                                    <td><?php echo $result['name'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['email'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['phone_no'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['subject'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['message'] ?></td>
                                            
                                                   
                                                </tr>
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


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('includes/footeer.php') ?>
    <!-- END: Footer-->


 <?php include('includes/scripts.php') ?>


</body>
<!-- END: Body-->

</html>