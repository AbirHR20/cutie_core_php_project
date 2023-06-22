<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $edu_title = htmlspecialchars(trim($_POST["edu_title"]));
        $edu_academy = htmlspecialchars(trim($_POST["edu_academy"]));
        $edu_description = htmlspecialchars(trim($_POST["edu_description"]));

        $flag = false;


        if(!$edu_title){
            $flag = true;
            $_SESSION["edu_title_error"] = "Title is required";
        }else{
            $_SESSION["old_edu_title"] = $edu_title;
        }
        if(!$edu_academy){
            $flag = true;
            $_SESSION["edu_academy_error"] = "education academy is required";
        }else{
            $_SESSION["old_edu_academy"] = $edu_academy;
        }
        if(!$edu_description){
            $flag = true;
            $_SESSION["edu_description_error"] = "education description is required";
        }else{
            $_SESSION["old_edu_description"] = $edu_description;
        }

        if($flag){
            header("location:./add.php");
        }else{
            $insert_query = "INSERT INTO `education`(`start_date`, `end_date`, `edu_title`, `edu_academy`, `edu_description`) VALUES ('$start_date','$end_date','$edu_title','$edu_academy','$edu_description')";
            mysqli_query($db_connect, $insert_query);
            header("location:./add.php");
            $_SESSION["success"] = "Data Inserted Successfully";
        }

    ?>

    