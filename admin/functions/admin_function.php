<?php

if(isset($_POST['add_admin'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $insert_admins = "INSERT INTO `admin` (`name`,`email`,`password`) Values ('$name','$email','$pass')";
    $majors_query = mysqli_query($con, $insert_admins) or die('Error in insert'.mysqli_error($con));

    if(!$majors_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "You admin inserted successfully";
    }

}
if(isset($_POST['delete_admin'])){
    $id = $_POST['admin_id'];

    $delete_admin="DELETE FROM `admin` WHERE `admin_id`='$id'";

    $delete_query =mysqli_query($con, $delete_admin) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your admin is deleted";
    }

}
if(isset($_POST['update_admin'])){
    $id = $_POST['admin_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $update_admin = "UPDATE `admin` SET `name` ='$name', `email`='$email',`password`='$pass' WHERE `admin_id`='$id' ";

    $update_query =mysqli_query($con, $update_admin) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your admin is updated";
    }

}