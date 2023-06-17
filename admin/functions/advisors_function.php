<?php
if(isset($_POST['delete_advisor'])){
    $id = $_POST['advisor_id'];

    $hide_advisors = "DELETE `advisors` SET `Status` =0 , `admin_id`=".$_SESSION['admin_id']."  where advisor_id ='$id'";

    $delete_query =mysqli_query($con, $hide_advisors) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your advisor is deleted";
    }

}
if(isset($_POST['accept_advisor'])){
    $id = $_POST['advisor_id'];

    $update_advisors = "UPDATE `advisors` SET `Status` =1 , `admin_id`=".$_SESSION['admin_id']." where advisor_id ='$id'";

    $update_query =mysqli_query($con, $update_advisors) or die('Error in update'.mysqli_error($con));
    if(!$update_query){
        die('Error in update'.mysqli_error($con));
    }else{
        $updated = "Your advisor is updated";
    }

}