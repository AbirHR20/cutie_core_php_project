<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $start_date = explode("-",$_POST["start_date"])[0];
        $end_date = explode("-",$_POST["end_date"])[0];
        $ex_title = htmlspecialchars(trim($_POST["ex_title"]));
        $ex_academy = htmlspecialchars(trim($_POST["ex_academy"]));
        $ex_description = htmlspecialchars(trim($_POST["ex_description"]));

        $flag = false;


        if(!$ex_title){
            $flag = true;
            $_SESSION["ex_title_error"] = "Title is required";
        }else{
            $_SESSION["old_ex_title"] = $ex_title;
        }
        if(!$ex_academy){
            $flag = true;
            $_SESSION["ex_academy_error"] = "experience academy is required";
        }else{
            $_SESSION["old_ex_academy"] = $ex_academy;
        }
        if(!$ex_description){
            $flag = true;
            $_SESSION["ex_description_error"] = "experience description is required";
        }else{
            $_SESSION["old_ex_description"] = $ex_description;
        }

        if($flag){
            header("location:./add.php");
        }else{
            $insert_query = "INSERT INTO `experience`(`start_date`, `end_date`, `ex_title`, `ex_academy`, `ex_description`) VALUES ('$start_date','$end_date','$ex_title','$ex_academy','$ex_description')";
            mysqli_query($db_connect, $insert_query);
            header("location:./add.php");
            $_SESSION["success"] = "Data Inserted Successfully";
        }

    ?>

    