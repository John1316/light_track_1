<?php

if(isset($_POST['add_consultation'])){
    $user_id = $_POST['user_id'];
    $advisor_id = $_POST['advisor_id'];
    $session_field = $_POST['session_field'];
    $email = $_POST['email'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $screenshot = $_POST['screenshot'];
    $session_fees = $_POST['session_fees'];
    $status = $_POST['status'];

    $insert_consultation = "INSERT INTO `consultations` (`user_id`, `advisor_id`, `session_field`, `email`,`preferred_date`, `preferred_time`, `screenshot`, `session_fees`, `status`) VALUES ('$user_id', '$advisor_id', '$session_field','$email', '$preferred_date', '$preferred_time', '$screenshot', '$session_fees', '$status')";
    $consultation_query = mysqli_query($con, $insert_consultation) or die('Error in insert'.mysqli_error($con));

    if(!$consultation_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "Consultation added successfully";
    }
}

if(isset($_POST['delete_consultation'])){
    $id = $_POST['consultation_id'];

    $delete_consultation = "DELETE FROM `consultations` WHERE `consultation_id`='$id'";

    $delete_query =mysqli_query($con, $delete_consultation) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Consultation deleted successfully";
    }
}

if(isset($_POST['update_consultation'])){
    $id = $_POST['consultation_id'];
    $user_id = $_POST['user_id'];
    $advisor_id = $_POST['advisor_id'];
    $session_field = $_POST['session_field'];
    $email = $_POST['email'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $screenshot = $_POST['screenshot'];
    $session_fees = $_POST['session_fees'];
    $status = $_POST['status'];

    $update_consultation = "UPDATE `consultations` SET `user_id`='$user_id', `advisor_id`='$advisor_id', `session_field`='$session_field', `email`='$email', `preferred_date`='$preferred_date', `preferred_time`='$preferred_time', `screenshot`='$screenshot', `session_fees`='$session_fees', `status`='$status' WHERE `consultation_id`='$id' ";

    $update_query =mysqli_query($con, $update_consultation) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Consultation updated successfully";
    }
}
