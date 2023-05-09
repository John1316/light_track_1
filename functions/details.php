<?php
if(isset($_GET['job_id'])){
    $sql_select = "SELECT jobs.job_id,jobs.image, sub_majors.title AS sub_major_title, jobs.title, jobs.description, jobs.sub_id, jobs.soft_skills, jobs.average_salary, jobs.courses , REPLACE(technical_skills, '•', '') AS technical_skills  FROM sub_majors INNER JOIN jobs ON jobs.sub_id = sub_majors.sub_id where job_id =".$_GET['job_id']."";
    $select_query= mysqli_query($con,$sql_select) or die('ERROR in details'.mysqli_error());
    if(!$select_query){
        die('ERROR in details'.mysqli_error());
    }else{
        $result_details = mysqli_fetch_array($select_query);
    }

}