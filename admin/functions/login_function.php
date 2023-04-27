<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_admin = "SELECT * from `admin` WHERE `email`='$email' AND `password`= '$password'";
    $select_result= mysqli_query($con,$select_admin) or die ('error'.mysqli_error($con));
    
    if($select_result){
        while($row = mysqli_fetch_array($select_result)){
            $_SESSION['admin_id'] = $row['admin_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
        }
        $count = mysqli_num_rows($select_result);
        if($count == 1){
            $_SESSION['admin'] = $email;
            header('location: admindashboard.php');
        }else{
            $login_failed = 'Your not authorized';
        }
    }else{
        echo "Something happen in sql statement";
    }

}
if(isset($_POST['delete_user'])){
    $id = $_POST['user_id'];

    $delete_user="DELETE FROM `users` WHERE `user_id`='$id'";

    $delete_query =mysqli_query($con, $delete_user) or die('Error in delete'.mysqli_error($con));
    if(!$delete_query){
        die('Error in delete'.mysqli_error($con));
    }else{
        $deleted = "Your user is deleted";
    }

}