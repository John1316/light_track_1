<?php

if(isset($_POST['add_majors'])){
    $name = $_POST['title'];

    $insert_majors = "INSERT INTO `majors` (`title`) Values ('$name') ";
    $majors_query = mysqli_query($con, $insert_majors) or die('Error in insert'.mysqli_error($con));

    if(!$majors_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "You major inserted successfully";
    }

}
if(isset($_POST['delete_major'])){
    $id = $_POST['major_id'];

    $delete_majors="DELETE FROM `majors` WHERE `major_id`='$id'";

    $delete_query =mysqli_query($con, $delete_majors) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your major is deleted";
    }

}
if(isset($_POST['update_major'])){
    $id = $_POST['major_id'];
    $name = $_POST['title'];

    $update_majors = "UPDATE `majors` SET `title` ='$name' WHERE `major_id`='$id' ";

    $update_query =mysqli_query($con, $update_majors) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your major is updated";
    }

}