<?php

if(isset($_POST['add_sub_majors'])){
    $name = $_POST['title'];
    $major_id = $_POST['major_id'];

    $insert_major = "INSERT INTO `sub_majors` (`title`,`major_id`) Values ('$name','$major_id') ";
    $majors_query = mysqli_query($con, $insert_major) or die('Error in insert'.mysqli_error($con));

    if(!$majors_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "You sub sub major inserted successfully";
    }

}
if(isset($_POST['delete_sub_major'])){
    $id = $_POST['sub_id'];

    $delete_majors="DELETE FROM `sub_majors` WHERE `sub_id`='$id'";

    $delete_query =mysqli_query($con, $delete_majors) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your sub major is deleted";
    }

}
if(isset($_POST['update_sub_major'])){
    $id = $_POST['sub_id'];
    $name = $_POST['title'];
    $major_id = $_POST['major_id'];

    $update_sub_majors = "UPDATE `sub_majors` SET `title` ='$name', `major_id`='$major_id'  WHERE `sub_id`='$id'";

    $update_query =mysqli_query($con, $update_sub_majors) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your sub major is updated";
    }

}