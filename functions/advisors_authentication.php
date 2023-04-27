<?php

if(isset($_POST['register_advisor'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['pass'];
    $c_password = $_POST['cpass'];
    $gender = $_POST['gender'];
    $linkedin = $_POST['linkedin'];
    $bio = $_POST['bio'];
    $availability = $_POST['availability'];

    $email_in_mysql = "SELECT * FROM `advisors` where `email`='$email'";
    $duplication = mysqli_query($con, $email_in_mysql);

    if($password !== $c_password){
        $error = "Password is not qual to confirm password";
    }else if(mysqli_num_rows($duplication) > 0){
        $error = "Email is already existed";
    }else{
        $insert_statement = "INSERT INTO `advisors`( `name`, `email`, `password`, `phone_no`, `bio`, `linkidin_profile`, `availability`, `gender`, `status`) VALUES('$name','$email','$password','$phoneno','$bio','$linkedin',' $availability','$gender', '0')";
        $insert_query = mysqli_query($con, $insert_statement);
        if(!$insert_query){
            die('Error in insert'.mysqli_error($con));
        }else{
            $success = "Advisor posted successfully";
        }

    }
}