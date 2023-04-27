<?php
if(isset($_POST['add_event'])){
    $event_name = $_POST['event_name'];
    $event_link = $_POST['event_link'];
    $event_image = time() . '-' . $_FILES['event_image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($event_image);
    move_uploaded_file($_FILES['event_image']['tmp_name'] ,$image_target );

    $insert_event = "INSERT INTO `events` (`event_name`,`event_image`,`event_link`) Values ('$event_name','$event_image','$event_link') ";
    $event_query = mysqli_query($con, $insert_event) or die('Error in insert'.mysqli_error($con));

    if(!$event_query){
        die('Error in insert'.mysqli_error($con));
    }else{
        $inserted = "Your event inserted successfully";
    }

}
if(isset($_POST['delete_event'])){
    $id = $_POST['event_id'];

    $delete_faculty="DELETE FROM `events` WHERE `event_id`='$id'";

    $delete_query =mysqli_query($con, $delete_faculty) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your event is deleted";
    }

}
if(isset($_POST['update_event'])){
    $id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_link=$_POST['event_link'];
    $event_image = time() . '-' . $_FILES['event_image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($event_image);
    move_uploaded_file($_FILES['event_image']['tmp_name'] ,$image_target );
    if(empty($_FILES['event_image']['name'])){
        $update_event = "UPDATE `events` SET `event_name`='$event_name', `event_link`='$event_link' WHERE `event_id`='$id' ";
    }else{
        $update_event = "UPDATE `events` SET `event_name`='$event_name', `event_link`='$event_link', `event_image`='$event_image' WHERE `event_id`='$id' ";
    }
    $update_query =mysqli_query($con, $update_event) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your event is updated";
    }

}