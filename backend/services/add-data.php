<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        
        $title = htmlspecialchars(trim($_POST["title"]));
        $short_description = htmlspecialchars(trim($_POST["short_description"]));
        $icon = htmlspecialchars(trim($_POST["icon"]));
        $status = htmlspecialchars(trim($_POST["status"]));

        $flag = false;


        if(!$title){
            $flag = true;
            $_SESSION["title_error"] = "Title is required";
        }else{
            $_SESSION["old_title"] = $title;
        }
        if(!$short_description){
            $flag = true;
            $_SESSION["short_description_error"] = "Short_Description is required";
        }else{
            $_SESSION["old_short_description"] = $short_description;
        }
        if(!$icon){
            $flag = true;
            $_SESSION["icon_error"] = "Icon is required";
        }else{
            $_SESSION["old_icon"] = $icon;
        }

        if($flag){
            header("location:../services/add.php");
        }else{
            $insert_query = "INSERT INTO `services`(`title`, `short_description`, `icon`, `status`) VALUES ('$title','$short_description','$icon','$status')";
            mysqli_query($db_connect, $insert_query);
            header("location:./add.php");
            $_SESSION["success"] = "Data Inserted Successfully";
        }

    ?>

    