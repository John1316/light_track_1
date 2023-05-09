<?php

if(isset($_POST['add_majors'])){
    $name = $_POST['title'];
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );

    $insert_majors = "INSERT INTO `majors` (`title`,`image`) Values ('$name','$image_name') ";
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
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    if(empty($_FILES['image']['name'])){
        $update_major = "UPDATE `majors` SET  `title`=' $name ' WHERE `id`='$major_id' ";
        $update_query =mysqli_query($con, $update_major) or die('Error in update'.mysqli_error($con));
    }else{
        $update_major = "UPDATE `majors` SET  `title`=' $name ', `image`= '$image_name'WHERE `major_id`='$id' ";
        $update_query =mysqli_query($con, $update_major) or die('Error in update'.mysqli_error($con));
    }
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your major is updated";
    }

}