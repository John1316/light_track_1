<?php

if(isset($_POST['add_sub_majors'])){
    $name = $_POST['title'];
    $major_id = $_POST['major_id'];
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );

    $insert_major = "INSERT INTO `sub_majors` (`title`,`major_id`,`image`,`admin_id`) Values ('$name','$major_id','$image_name', ".$_SESSION['admin_id'].") ";
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
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    if(empty($_FILES['image']['name'])){
        $update_sub_major = "UPDATE `sub_majors` SET  `title`=' $name ', `major_id`='$major_id' , `admin_id`= ".$_SESSION['admin_id']." WHERE `sub_id`='$id' ";
        $update_query =mysqli_query($con, $update_sub_major) or die('Error in update'.mysqli_error($con));
    }else{
        $update_sub_major = "UPDATE `sub_majors` SET  `title`=' $name ', `major_id`='$major_id',`image`= '$image_name', `admin_id`= ".$_SESSION['admin_id']." WHERE `sub_id`='$id' ";
        $update_query =mysqli_query($con, $update_sub_major) or die('Error in update'.mysqli_error($con));
    }
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your sub major is updated";
    }

}