<?php
    require_once('functions/connectionproject.php');
    include('functions/advisors_function.php');

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
                                    <li class="breadcrumb-item active">Advisors
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
                                <h4 class="card-title">Advisors</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="w-100">

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
                                                    <th>Advisor ID</th>
                                                    <th>Sub Major ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Bio</th>
                                                    <th>Linkidin Profile</th>
                                                    <th>Work Experience</th>
                                                    <th>Avilability</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $advisors = "SELECT advisors.*, sub_majors.title AS sub_major_title
                                                    FROM advisors
                                                    INNER JOIN sub_majors ON advisors.sub_id = sub_majors.sub_id;"; // Corrected SQL query
                                                    $advisor_query = mysqli_query($con, $advisors) or die('advisor_error'.mysqli_error($con));
                                                    while($result = mysqli_fetch_array($advisor_query)){
                                                ?>
                                                <tr>
                                                    <td class='text-bold-500'>#<?php echo $result['advisor_id'] ?></td>
                                                    <td><?php echo $result['sub_major_title'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['name'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['email'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['phone_no'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['bio'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['linkidin_profile'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['work_experience'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['availability'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['gender'] ?></td>
                                                    <td class='text-bold-500'><?php echo $result['status'] ?></td>
                                                    <td> 
                                                        <form method="post"> 
                                                            <input type="hidden" name='advisor_id' title="advisor_id" id="advisor_id" value="<?php echo $result['advisor_id'] ?>">
                                                           <div class="d-flex">
                                                           <button name="accept_advisor" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you sure you want to approve <?php echo $result['advisor_id'];?>')">
                                                                <i class="badge-circle badge-circle-light-secondary bx bx-check font-medium-1"></i>
                                                            </button>
                                                            <button name="delete_advisor" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you sure you want to delete <?php echo $result['advisor_id'];?>')">
                                                                <i class="badge-circle badge-circle-light-secondary bx bx-x font-medium-1"></i>
                                                            </button>
                                                           </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php } ?>
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
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


 <?php include('includes/scripts.php') ?>


</body>
<!-- END: Body-->

</html>