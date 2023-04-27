<?php
$servername="localhost";
$username="root";
$password="";
$dbname="light_track";

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection failed due to:".$con->connect_error);
}
session_start();
?>