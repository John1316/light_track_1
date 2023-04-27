<?php
$servername="localhost";
$username="root";
$password="";
$dbname="light_track";

$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection failed due to:".mysqli_error());
}

?>