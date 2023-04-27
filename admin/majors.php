+<?php
    require_once('functions/connectionproject.php');
    include('functions/majors_function.php');
    if (!isset($_SESSION['major_id'])){

    } 
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta title="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta title="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta title="author" content="PIXINVENT">
    <title>Bootstrap Tables - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

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
                                    <li class="breadcrumb-item active">Majors
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
                                <h4 class="card-title">Majors</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_carrer">Add major</button>

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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NAME</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $majors = "SELECT * FROM `majors`";
                                                $major_query = mysqli_query($con, $majors) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($major_query)){

                                                
                                                ?>
                                                <tr>
                                                    <td class="text-bold-500">#<?php echo $result['major_id'] ?></td>
                                                    <td><?php echo $result['title'] ?></td>
                                                    <td class="d-flex">


                                                    <button  data-toggle="modal" data-target="#update_major<?php echo $result['major_id'] ?>" class="pl-0 btn btn-transparent"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>


                                                    <form class="mb-0"  method="post">
                                                        <input type="hidden" name="major_id" id="major_id" value="<?php echo $result['major_id'] ?>">
                                                        <button name="delete_major" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['title'];
                                                          ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                    </form>
                                                    </td>
                                                </tr>
                                                <div id="update_major<?php echo $result['major_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="my-modal-title">Major</h5>
                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST">
                                                            <div class="row">
                                                            <input type="hidden" name="major_id" id="major_id" value="<?php echo $result['major_id'] ?>">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="title">Title</label>
                                                                        <input id="title" class="form-control" name="title" value="<?php echo $result['title'] ?>" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update_major" class="btn btn-primary">Update major</button>
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
    <div id="add_carrer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Major</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close" name="title">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_majors" class="btn btn-primary">Add major</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2023 &copy;Light Track</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Light Track</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


 <?php include('includes/scripts.php') ?>


</body>
<!-- END: Body-->

</html>