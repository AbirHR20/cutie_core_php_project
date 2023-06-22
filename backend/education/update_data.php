<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $edu_title = htmlspecialchars(trim($_POST["edu_title"]));
        $edu_academy = htmlspecialchars(trim($_POST["edu_academy"]));
        $edu_description = htmlspecialchars(trim($_POST["edu_description"]));

        $flag = false;


        if(!$edu_title){
            $flag = true;
            $_SESSION["edu_title_error"] = "education title name is required";
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
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `education` SET `start_date`='$start_date',`end_date`='$end_date',`edu_title`='$edu_title',`edu_academy`='$edu_academy',`edu_description`='$edu_description' WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./education_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    