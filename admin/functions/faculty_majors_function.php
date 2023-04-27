<?php
if(isset($_POST['add_fauclty_major'])){
    $faculty_id = $_POST['faculty_id'];
    $name = $_POST['name'];
    // $major = $_POST['major'];
    $description = $_POST['description'];
    $job_fields = $_POST['job_fields'];

    $insert_major = "INSERT INTO `faculty_majors` (`name`,`faculty_id`,`description`,`job_fields`) Values ('$name','$faculty_id','$description','$job_fields') ";
    $faculty_query = mysqli_query($con, $insert_major) or die('Error in insert'.mysqli_error($con));

    if(!$faculty_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "Your faculty major inserted successfully";
    }

}
if(isset($_POST['delete_faculty_major'])){
    $id = $_POST['major_id'];

    $delete_faculty="DELETE FROM `faculty_majors` WHERE `major_id`='$id'";

    $delete_query =mysqli_query($con, $delete_faculty) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your faculty major is deleted";
    }

}
if(isset($_POST['update_major'])){
    $id = $_POST['major_id'];
    $faculty_id = $_POST['faculty_id'];
    $name = $_POST['name'];
    $description=$_POST['description'];
    $job_fields=$_POST['job_fields'];

    $update_faculty = "UPDATE `faculty_majors` SET `faculty_id`= '$faculty_id',`name`='$name', `description`='$description',`job_fields`='$job_fields' WHERE `major_id`='$id' ";
   

    $update_query =mysqli_query($con, $update_faculty) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your faculty major is updated";
    }

}