<?php
    require_once('functions/connectionproject.php');
    include('functions/events_function.php');
    if (!isset($_SESSION['event_id'])){
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
                                    <li class="breadcrumb-item active">Events
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
                                <h4 class="card-title">Events</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_event">Add event</button>

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
                                                    <th>Event ID</th>
                                                    <th>Event Name</th>
                                                    <th>Event Link</th>
                                                    <th>Event Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $categories = "SELECT * from `events`";
                                                $category_query = mysqli_query($con, $categories) or die('users_error'.mysqli_error($con));

                                                while($result = mysqli_fetch_array($category_query)){

                                            
                                                ?>
                                                <tr>
                                                    <td class="text-bold-500">#<?php echo $result['event_id'] ?></td>
                                                    <td><?php echo $result['event_name'] ?></td>
                                                    <td><?php echo $result['event_link'] ?></td>
                                                    <!-- <td><img width="100px" height="100px" style="object-fit: contain;" src="../images/<?php echo $result['event_image']; ?>" alt=""></td> -->
                                                    <td><?php echo $result['event_image']; ?></td>
                                                    <td class="d-flex">


                                                    <button  data-toggle="modal" data-target="#update_event<?php echo $result['event_id'] ?>" class="pl-0 btn btn-transparent"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>

                                                    <form  method="post">
                                                        <input type="hidden" name="event_id" id="event_id" value="<?php echo $result['event_id'] ?>">
                                                        <button name="delete_event" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['event_id']; ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                    </form>
                                                  
                                                    </td>
                                                </tr>
                                                <div id="update_event<?php echo $result['event_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="my-modal-title">Title</h5>
                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="event_id" id="event_id " value="<?php echo $result['event_id'] ?>">
                                                            <div class="row">
                                                                    
                                                                        
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="name">Event Name</label>
                                                                            <input id="name" class="form-control" value="<?php echo $result['event_name'] ?>" type="text" name="event_name" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="event_image">Event Image</label>
                                                                            <input id="event_image" class="form-control" type="file" name="event_image" >

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="name">Event Link</label>
                                                                            <input id="name" class="form-control" value="<?php echo $result['event_link'] ?>" type="text" name="event_link" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="update_event" class="btn btn-primary">Update Event</button>
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
    <div id="add_event" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Title</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                       
                        <div class="col-12">
                            <div class="form-group">
                                <label for="event_name">Event Name</label>
                                <input id="event_name" class="form-control" type="text" name="event_name" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="event_image">Event Image</label>
                                <input id="event_image" class="form-control" type="file" name="event_image" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="event_link">Event Link</label>
                                <input id="event_link" class="form-control" type="text" name="event_link" >
                            </div>
                        </div>
                    
                    </div>
                
                   
                    <div class="modal-footer">
                        <button type="submit" name="add_event" class="btn btn-primary">Add Event</button>
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