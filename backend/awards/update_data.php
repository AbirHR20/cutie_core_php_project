<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $aw_title = htmlspecialchars(trim($_POST["aw_title"]));
        $aw_academy = htmlspecialchars(trim($_POST["aw_academy"]));
        $aw_description = htmlspecialchars(trim($_POST["aw_description"]));

        $flag = false;


        if(!$aw_title){
            $flag = true;
            $_SESSION["aw_title_error"] = "education title name is required";
        }else{
            $_SESSION["old_aw_title"] = $ex_title;
        }
        if(!$aw_academy){
            $flag = true;
            $_SESSION["aw_academy_error"] = "education academy is required";
        }else{
            $_SESSION["old_aw_academy"] = $aw_academy;
        }
        if(!$aw_description){
            $flag = true;
            $_SESSION["aw_description_error"] = "education description is required";
        }else{
            $_SESSION["old_aw_description"] = $aw_description;
        }

        if($flag){
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `awards` SET `start_date`='$start_date',`end_date`='$end_date',`aw_title`='$aw_title',`aw_academy`='$aw_academy',`aw_description`='$aw_description' WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./aw_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    