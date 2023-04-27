<?php

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
   $subject = mysqli_real_escape_string($con, $_POST['subject']);
   $message = mysqli_real_escape_string($con, $_POST['message']);
 

 
  $query="INSERT INTO feedback VALUES('$name','$email','$phone_no','$subject','$message')";
  mysqli_query($con,$query);
}
?>