<?php
    require_once('functions/connectionproject.php');
    include('functions/sub_major_function.php');
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
                                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Sub Majors
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
                                <h4 class="card-title">Sub Majors</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_carrer">Add sub major</button>

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
                                                    <th>Sub Major NAME</th>
                                                    <th>Major NAME</th>
                                                    <th>IMAGE</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $categories = "SELECT sub_majors.title, sub_majors.sub_id , majors.title AS major_title , sub_majors.major_id, sub_majors.image FROM sub_majors INNER JOIN majors ON majors.major_id = sub_majors.major_id
                                                ";
                                                $category_query = mysqli_query($con, $categories) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($category_query)){

                                                
                                                ?>
                                                <tr>
                                                    <td class="text-bold-500">#<?php echo $result['sub_id'] ?></td>
                                                    <td><?php echo $result['title'] ?></td>
                                                    <td><?php echo $result['major_title'] ?></td>
                                                    <td><img width="100px" height="100px" style="object-fit: contain;" src="../images/<?php echo $result['image']; ?>" alt=""></td>

                                                    <td class="d-flex">


                                                    <button  data-toggle="modal" data-target="#update_sub_major<?php echo $result['sub_id'] ?>" class="pl-0 btn btn-transparent"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>

                                                    <form  method="post">
                                                        <input type="hidden" name="sub_id" id="sub_id" value="<?php echo $result['sub_id'] ?>">
                                                        <button name="delete_sub_major" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['title'];
                                                          ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                    </form>
                                                  
                                                    </td>
                                                </tr>
                                                <div id="update_sub_major<?php echo $result['sub_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="my-modal-title">Title</h5>
                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"  enctype="multipart/form-data">
                                                            <div class="row">
                                                            <input type="hidden" name="sub_id" id="sub_id" value="<?php echo $result['sub_id'] ?>">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="name">Name</label>
                                                                        <input id="sub_id" class="form-control" value="<?php echo $result['title'] ?>" type="text" name="title" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="major_id">Majors</label>
                                                                        <select id="major_id" class="form-control"name="major_id"  value="<?php echo $result['major_id'] ?>"  type="text" required>
                                                                            <option value="">Select major</option>
                                                                            <?php
                                                                            $majors = "SELECT * FROM `majors`";
                                                                            $majors_query = mysqli_query($con, $majors) or die('users_error'.mysqli_error($con));

                                                                            while($majors_result = mysqli_fetch_array($majors_query)){

                                                                            
                                                                            ?>
                                                                            <option value="<?php echo $majors_result['major_id'] ?>"><?php echo $majors_result['title'] ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="image">Image</label>
                                                                        <input id="image" class="form-control" value="<?php echo $result['image'] ?>" type="file" name="image" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update_sub_major" class="btn btn-primary">Update sub major</button>
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
                    <h5 class="modal-title" id="my-modal-title">Title</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST"  enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="major_id">Majors</label>
                                <select id="major_id" class="form-control" type="text" name="major_id" required>
                                    <option value="">Select major</option>
                                    <?php
                                    $categories = "SELECT * FROM `majors`";
                                                $category_query = mysqli_query($con, $categories) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($category_query)){

                                                
                                                ?>
                                    <option value="<?php echo $result['major_id'] ?>"><?php echo $result['title'] ?></option>
                                    <?php
                                                }
                                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control" type="file" name="image" required>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_sub_majors" class="btn btn-primary">Add sub major</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include('includes/footeer.php') ?>


 <?php include('includes/scripts.php') ?>


</body>
<!-- END: Body-->

</html>