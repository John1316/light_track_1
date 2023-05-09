<?php
if(isset($_GET['faculty_major_id'])){
    $sql_select = "SELECT * from `faculty_majors` where major_id =".$_GET['faculty_major_id']."";
    $select_query= mysqli_query($con,$sql_select) or die('ERROR in details'.mysqli_error());
    if(!$select_query){
        die('ERROR in details'.mysqli_error());
    }else{
        $result_details = mysqli_fetch_array($select_query);
    }

}