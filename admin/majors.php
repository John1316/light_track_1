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
                                                    <th>IMAGE</th>
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
                                                    <td><img width="100px" height="100px" style="object-fit: contain;" src="../images/<?php echo $result['image']; ?>" alt=""></td>

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
                                                            <form method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                            <input type="hidden" name="major_id" id="major_id" value="<?php echo $result['major_id'] ?>">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="title">Name</label>
                                                                        <input id="title" class="form-control" name="title" value="<?php echo $result['title'] ?>" type="text" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                 <div class="form-group">
                                                                    <label for="image">Image</label>
                                                                    <input id="image" class="form-control" type="file" name="image" >
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
                    <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input id="title" class="form-control" type="text" name="title" required>
                            </div>
                        </div>

                        <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="image" class="form-control" type="file" name="image">
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
    <?php include('includes/footeer.php') ?>
    <!-- END: Footer-->


 <?php include('includes/scripts.php') ?>


</body>
<!-- END: Body-->

</html>