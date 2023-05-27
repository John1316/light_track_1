<?php
require_once('functions/connectionproject.php');
include('functions/faculty_majors_function.php');
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
    s
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
                                    <li class="breadcrumb-item active">Majors Faculties
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
                                <h4 class="card-title">Majors Faculties</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_carrer">Add faculty</button>

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
                                                    <th>Majors Faculty ID</th>
                                                    <th>Faculty ID</th>
                                                    <th>Major Name</th>
                                                    <th>Description</th>
                                                    <th>Job Fields</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $categories = "SELECT faculty_majors.major_id , faculty_majors.faculty_id ,faculty_majors.name AS major_name , faculty_majors.description, faculty_majors.job_fields , faculties.name AS faculty_name, faculty_majors.image from `faculty_majors` INNER JOIN faculties on faculty_majors.faculty_id = faculties.faculty_id;";
                                                $category_query = mysqli_query($con, $categories) or die('users_error' . mysqli_error($con));

                                                while ($result = mysqli_fetch_array($category_query)) {


                                                ?>
                                                    <tr>
                                                        <td class="text-bold-500">#<?php echo $result['major_id'] ?></td>
                                                        <td><?php echo $result['faculty_name'] ?></td>
                                                        <td><?php echo $result['major_name'] ?></td>
                                                        <td><?php echo $result['description'] ?></td>
                                                        <td><?php echo $result['job_fields'] ?></td>
                                                        <td><img width="100px" height="100px" style="object-fit: contain;" src="../images/<?php echo $result['image']; ?>" alt=""></td>
                                                        <td class="d-flex">


                                                            <button id="<?= $result['major_id'] ?>" data-toggle="modal" data-target="#update_major<?php echo $result['major_id'] ?>" class="pl-0 btn btn-transparent btnEdit"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></button>

                                                            <form method="post">
                                                                <input type="hidden" name="faculty_id" id="faculty_id" value="<?php echo $result['major_id'] ?>">
                                                                <button name="delete_faculty_major" type="submit" class="pl-0 btn btn-transparent" onclick="return confirm('Are you want to delete <?php echo $result['major_id']; ?>')"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                    <div id="update_major<?php echo $result['major_id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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
                                                                        <input type="hidden" name="major_id" id="major_id " value="<?php echo $result['major_id'] ?>">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="name">Majors Name</label>
                                                                                    <select name="faculty_id" id="faculty_id" class="form-control">
                                                                                        <option value="">Select faculty</option>
                                                                                        <?php
                                                                                        $faculty = "SELECT * from `faculties`";
                                                                                        $faculty_query = mysqli_query($con, $faculty) or die('users_error' . mysqli_error($con));

                                                                                        while ($result_fac = mysqli_fetch_array($faculty_query)) {

                                                                                            $selected = '';
                                                                                            if ($result_fac['faculty_id'] == $result['faculty_id']) {
                                                                                                $selected = 'selected';
                                                                                            }
                                                                                        ?>
                                                                                            <option value="<?php echo $result_fac['faculty_id'] ?>" <?php echo $selected ?>><?php echo $result_fac['name'] ?></option>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input id="name" class="form-control" value="<?php echo $result['major_name'] ?>" type="text" name="name" required>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="name">Description</label>
                                                                                <textarea id="editor_description<?= $result['major_id'] ?>" class="form-control" type="text" name="description" required> <?php echo $result['description'] ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="name">Jop Fields</label>
                                                                                <textarea id="editor_fields<?= $result['major_id'] ?>" style="height:100px" class="form-control" type="text" name="job_fields" required> <?php echo $result['job_fields'] ?></textarea>
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
                                                                    <button type="submit" name="update_major" class="btn btn-primary">Update Major</button>
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
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Faculty</label>
                                    <select name="faculty_id" id="faculty_id" class="form-control">
                                        <option value="">Select faculty</option>
                                        <?php
                                        $faculty = "SELECT * from `faculties`";
                                        $faculty_query = mysqli_query($con, $faculty) or die('users_error' . mysqli_error($con));

                                        while ($result_fac = mysqli_fetch_array($faculty_query)) {


                                        ?>
                                            <option value="<?php echo $result_fac['faculty_id'] ?>"><?php echo $result_fac['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Major Name</label>
                                    <input id="name" class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <textarea id="editor1" class="form-control" type="text" name="description" required>Enter text here...</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Jop Fields</label>
                                    <textarea id="editor2" class="form-control" type="text" name="job_fields" required>Enter text here...</textarea>
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
                    <button type="submit" name="add_fauclty_major" class="btn btn-primary">Add faculty</button>
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
    <script>
        $('.btnEdit').on('click', function(event) {
            let id = event.currentTarget.attributes.id.value;
            console.log(event.currentTarget.attributes.id.value)
            ClassicEditor.create(document.querySelector(`#editor_description${id}`));
            ClassicEditor.create(document.querySelector(`#editor_fields${id}`));
        })
    </script>

</body>
<!-- END: Body-->

</html>