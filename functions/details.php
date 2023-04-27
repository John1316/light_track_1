<?php

if(isset($_GET['job_id'])){
    $sql_select = "SELECT * FROM `jobs` where `job_id`=".$_GET['job_id']." ";
    $select_query= mysqli_query($con,$sql_select) or die('ERROR in details'.mysqli_error());
    if(!$select_query){
        die('ERROR in details'.mysqli_error());
    }else{
        $result_details = mysqli_fetch_array($select_query);
    }

}