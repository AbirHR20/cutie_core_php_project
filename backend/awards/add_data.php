<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $aw_title = htmlspecialchars(trim($_POST["aw_title"]));
        $aw_academy = htmlspecialchars(trim($_POST["aw_academy"]));
        $aw_description = htmlspecialchars(trim($_POST["aw_description"]));

        $flag = false;


        if(!$aw_title){
            $flag = true;
            $_SESSION["aw_title_error"] = "Title is required";
        }else{
            $_SESSION["old_aw_title"] = $aw_title;
        }
        if(!$aw_academy){
            $flag = true;
            $_SESSION["aw_academy_error"] = "experience academy is required";
        }else{
            $_SESSION["old_aw_academy"] = $aw_academy;
        }
        if(!$aw_description){
            $flag = true;
            $_SESSION["aw_description_error"] = "experience description is required";
        }else{
            $_SESSION["old_aw_description"] = $aw_description;
        }

        if($flag){
            header("location:./add.php");
        }else{
            $insert_query = "INSERT INTO `awards`(`start_date`, `end_date`, `aw_title`, `aw_academy`, `aw_description`) VALUES ('$start_date','$end_date','$aw_title','$aw_academy','$aw_description')";
            mysqli_query($db_connect, $insert_query);
            header("location:./add.php");
            $_SESSION["success"] = "Data Inserted Successfully";
        }

    ?>

    