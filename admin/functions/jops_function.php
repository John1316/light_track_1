<?php
if(isset($_POST['add_job'])){
    $sub_id = $_POST['sub_id'];
    $title = $_POST['title'];
    $description =mysqli_real_escape_string($con,$_POST['description']);
    $soft_skills = mysqli_real_escape_string($con,$_POST['soft_skills']);
    $technical_skills = mysqli_real_escape_string($con,$_POST['technical_skills']);
    $average_salary = $_POST['average_salary'];
    $courses = mysqli_real_escape_string($con,$_POST['courses']);
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    $insert_jop="INSERT INTO  `jobs` (`sub_id`, `title`, `description`, `soft_skills`, `technical_skills`,`average_salary`,`courses`, `image`) VALUES ('$sub_id','$title','$description','$soft_skills','$technical_skills','$average_salary','$courses','$image_name')";
    $jop_query = mysqli_query($con, $insert_jop) or die('Error in insert'.mysqli_error($con));
    if(!$jop_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "You jop inserted successfully";
    }
}
if(isset($_POST['delete_job'])){
    $id = $_POST['job_id'];

    $delete_jop="DELETE FROM `jobs` WHERE `job_id`='$id'";

    $delete_query =mysqli_query($con, $delete_jop) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your job is deleted";
    }

}
if(isset($_POST['update_job'])){
    $id = $_POST['job_id'];
    $sub_id = $_POST['sub_id'];
    $title = $_POST['title'];
    $description = mysqli_real_escape_string($con , $_POST['description']);
    $soft_skills = mysqli_real_escape_string($con ,$_POST['soft_skills']);
    $technical_skills = mysqli_real_escape_string($con ,$_POST['technical_skills']);
    $average_salary = $_POST['average_salary'];
    $courses = mysqli_real_escape_string($con ,$_POST['courses']);
    // $respons = $_POST['respons'];
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    if(empty($_FILES['image']['name'])){
        $update_job = "UPDATE `jobs` SET `sub_id`=$sub_id, `title`=' $title ',`description`='$description',`soft_skills`='$soft_skills',`technical_skills`='$technical_skills',`average_salary`='$average_salary',`courses`='$courses' WHERE `job_id`='$id' ";
        $update_query =mysqli_query($con, $update_job) or die('Error in update'.mysqli_error($con));
    }else{
        $update_job = "UPDATE `jobs` SET `sub_id`=$sub_id, `title`=' $title ',`description`='$description',`soft_skills`='$soft_skills',`technical_skills`='$technical_skills',`average_salary`='$average_salary',`courses`='$courses', `image`= '$image_name' WHERE `job_id`='$id' ";
        $update_query =mysqli_query($con, $update_job) or die('Error in update'.mysqli_error($con));
    }
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your job is updated";
    }

}