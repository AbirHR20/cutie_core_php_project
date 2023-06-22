<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $ex_title = htmlspecialchars(trim($_POST["ex_title"]));
        $ex_academy = htmlspecialchars(trim($_POST["ex_academy"]));
        $ex_description = htmlspecialchars(trim($_POST["ex_description"]));

        $flag = false;


        if(!$ex_title){
            $flag = true;
            $_SESSION["ex_title_error"] = "education title name is required";
        }else{
            $_SESSION["old_ex_title"] = $ex_title;
        }
        if(!$ex_academy){
            $flag = true;
            $_SESSION["ex_academy_error"] = "education academy is required";
        }else{
            $_SESSION["old_ex_academy"] = $ex_academy;
        }
        if(!$ex_description){
            $flag = true;
            $_SESSION["ex_description_error"] = "education description is required";
        }else{
            $_SESSION["old_ex_description"] = $ex_description;
        }

        if($flag){
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `experience` SET `start_date`='$start_date',`end_date`='$end_date',`ex_title`='$ex_title',`ex_academy`='$ex_academy',`ex_description`='$ex_description' WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./experience_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    