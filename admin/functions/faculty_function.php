<?php
if(isset($_POST['add_fauclty'])){
    $name = $_POST['name'];
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );


    $insert_major = "INSERT INTO `faculties` (`name`,`image`) Values ('$name','$image_name') ";
    $faculty_query = mysqli_query($con, $insert_major) or die('Error in insert'.mysqli_error($con));

    if(!$faculty_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "You faculty inserted successfully";
    }

}
if(isset($_POST['delete_faculty'])){
    $id = $_POST['faculty_id'];

    $delete_faculty="DELETE FROM `faculties` WHERE `faculty_id`='$id'";

    $delete_query =mysqli_query($con, $delete_faculty) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your faculty is deleted";
    }

}
if(isset($_POST['update_faculty'])){
    $id = $_POST['faculty_id'];
    $name = $_POST['name'];
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    if(empty($_FILES['image']['name'])){
        $update_faculty = "UPDATE `faculties` SET  `name`=' $name ' WHERE `faculty_id`='$id' ";
        $update_query =mysqli_query($con, $update_faculty) or die('Error in update'.mysqli_error($con));
    }else{
        $update_faculty = "UPDATE `faculties` SET  `name`=' $name ', `image`= '$image_name'WHERE `faculty_id`='$id' ";
        $update_query =mysqli_query($con, $update_faculty) or die('Error in update'.mysqli_error($con));
    }
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your faculty is updated";
    }

}