<?php
    require_once('functions/connectionproject.php');
    if (!isset($_SESSION['admin_id'])){

        header("Location: index.php");
    } 
    if(isset($_POST['delete_user'])){
        $id = $_POST['user_id'];
    
        $delete_user="DELETE FROM `users` WHERE `user_id`='$id'";
    
        $delete_query =mysqli_query($con, $delete_user) or die('Error in delete'.mysqli_error($con));
        if(!$delete_query){
            die('Error in delete'.mysqli_error($con));
        }else{
            $deleted = "Your user is deleted";
        }
    
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
                                    <li class="breadcrumb-item active">Users
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
                                <h4 class="card-title">users</h4>
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
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Birthdate</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $users = "SELECT * FROM `users`";
                                                $user_query = mysqli_query($con, $users) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($user_query)){

                                                
                                                ?>
                                                <tr>
                                                <td class="text-bold-500">#<?php echo $result['user_id'] ?></td>
                                                    <td><?php echo $result['first_name'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['last_name'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['email'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['phone_no'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['address'] ?></td>
                                                    <td style= "white-space:nowrap;text-overflow: ellipsis;
                                                    overflow: hidden;"  class="text-bold-500"><?php echo $result['birthdate'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['gender'] ?></td>
                                                    <td class="text-bold-500"><?php echo $result['statues'] ?></td>
                                                   <td> <form  method="post">
                                                        <input type="hidden" name="user_id" admin_id="user_id" value="<?php echo $result['user_id'] ?>">
                                                        <button name="delete_user" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['user_id'];
                                                          ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                    </form>
                                                    </td>
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