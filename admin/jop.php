<?php
require_once('functions/connectionproject.php');
include('functions/jops_function.php');
if (!isset($_SESSION['admin_id'])) {
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
                                    <li class="breadcrumb-item active">Jobs
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
                                <h4 class="card-title">jobs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_job">Add Job</button>

                                        <?php if (isset($inserted)) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <strong><?php echo $inserted ?></strong>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($deleted)) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <strong><?php echo $deleted ?></strong>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($updated)) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <strong><?php echo $updated ?></strong>
                                            </div>
                                        <?php } ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Sub Major Name</th>
                                                    <th>Title</th>
                                                    <th>Description & Respnsabilties</th>
                                                    <th>Soft skills</th>
                                                    <th>Technical skills</th>
                                                    <th>Average salary</th>
                                                    <th>courses</th> 
                                                    <th>Image</th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $jobs = "SELECT jobs.job_id,jobs.image, sub_majors.title AS sub_major_title, jobs.title, jobs.description, jobs.sub_id, jobs.soft_skills, jobs.technical_skills, jobs.average_salary, jobs.courses FROM sub_majors INNER JOIN jobs ON jobs.sub_id = sub_majors.sub_id";
                                               $job_query = mysqli_query($con, $jobs) or die('users_error' . mysqli_error($con));

                                                while ($result = mysqli_fetch_array($job_query)) {


                                                ?>
                                                    <tr>
                                                        <td class="text-bold-500">#<?php echo $result['job_id'] ?></td>

                                                        <td><?php echo $result['sub_major_title'] ?></td>

                                                        <td><?php echo $result['title'] ?></td>

                                                        <td><?php echo substr($result['description'], 0, 100); ?></td>

                                                        <td><?php echo $result['soft_skills'] ?></td>

                                                        <td><?php echo  substr($result['technical_skills'], 0, 100); ?></td>
                                                        
                                                        <td><?php echo $result['average_salary'] ?></td>

                                                        <td><?php echo substr($result['courses'], 0, 100); ?></td>

                                                        <td><img width="100px" height="100px" style="object-fit: contain;" src="../images/<?php echo $result['image']; ?>" alt=""></td>

                                                        <td class="d-flex">


                                                            <button data-toggle="modal" data-target="#update_job<?php echo $result['job_id'] ?>" class="pl-0 btn btn-transparent"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>


                                                            <form method="post">
                                                                <input type="hidden" name="job_id" id="job_id" value="<?php echo $result['job_id'] ?>">
                                                                <button name="delete_job" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['title']; ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
            <div id="update_job<?php echo $result['job_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
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
                                    <input type="hidden" name="job_id" id="job_id" value="<?php echo $result['job_id'] ?>">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Sub Major Name</label>
                                            <select id="sub_id" class="form-control" type="text" name="sub_id" required>
                                                <option value="">Select sub major</option>
                                                <?php
                                                $sub_majors = "SELECT * FROM `sub_majors`";
                                                $sub_majors_query = mysqli_query($con, $sub_majors) or die('users_error' . mysqli_error($con));

                                                while ($sub_majors_result = mysqli_fetch_array($sub_majors_query)) {
                                                    $selected = '';
                                                    if ($sub_majors_result['sub_id'] == $result['sub_id']) {
                                                        $selected = 'selected';
                                                    }
                                                ?>
                                                    <option value="<?php echo $sub_majors_result['sub_id'] ?>" <?php echo $selected ?>><?php echo $sub_majors_result['title'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <input id="name" class="form-control" value="<?php echo $result['sub_id'] ?>" type="text" name="sub_major_name" required> -->


                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">title</label>
                                            <input id="name" class="form-control" value="<?php echo $result['title'] ?>" type="text" name="title" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Description</label>
                                            <textarea style="height:100px" class="form-control" type="text" name="description" required><?php echo $result['description'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Soft skills</label>
                                            <textarea style="height:100px" class="form-control" type="text" name="soft_skills" required><?php echo $result['soft_skills'] ?></textarea>
                                        </div>
                                    </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Technical skills</label>
                                                
                                                <textarea style="height:100px" class="form-control" type="text" name="technical_skills" required><?php echo $result['technical_skills'] ?> </textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Average salary</label>
                                                <textarea style="height:100px" id="name" class="form-control" type="text" name="average_salary" required><?php echo $result['average_salary'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">courses</label>
                                                <textarea style="height:100px" class="form-control" type="text" name="courses" required> <?php echo $result['courses'] ?></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="image" class="form-control" type="file" name="image" >
                                </div>
                            </div>
                                    <div class="modal-footer">
                                        
                                        <button type="submit" name="update_job" class="btn btn-primary">Update job </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

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
    <div id="add_job" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Title</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sub_id">Sub Majors</label>
                                    <select id="sub_id" class="form-control" type="text" name="sub_id" required>
                                        <option value="">Select sub major</option>
                                        <?php
                                        $sub_majors = "SELECT * FROM sub_majors";
                                        $sub_majors_query = mysqli_query($con, $sub_majors) or die('sub_majors_error' . mysqli_error($con));


                                        while ($sub_majors_result = mysqli_fetch_array($sub_majors_query)) {


                                        ?>
                                            <option value="<?php echo $sub_majors_result['sub_id'] ?>"><?php echo $sub_majors_result['title'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Jop Name</label>
                                    <input id="name" class="form-control" type="text" name="title" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <textarea style="height:100px" class="form-control" type="text" name="description" required>Enter text here...</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Soft Skills</label>
                                    <textarea style="height:100px" class="form-control" type="text" name="soft_skills" required>Enter text here...</textarea>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Technical Skills</label>
                                    <!-- <textarea style="height:100px" class="form-control" type="text" name="technical_skills" required>Enter text here...</textarea> -->
                                    <!-- <div id="editor">
                                            </div> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Average salary</label>
                                    <input id="name" class="form-control" type="text" name="average_salary" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">courses</label>
                                    <textarea style="height:100px" class="form-control" type="text" name="courses" required>Enter text here...</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="image" class="form-control" type="file" name="image">
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_job" class="btn btn-primary">Add job</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>

            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('includes/footeer.php') ?>
    <!-- END: Footer-->

    <?php include('includes/scripts.php') ?>
                                        <script>
                                            CKEDITOR.editorConfig = function( config ) {
	config.language = 'es';
	config.uiColor = '#F7B42C';
	config.height = 300;
	config.toolbarCanCollapse = true;
};

                                        </script>
</body>
<!-- END: Body-->

</html>