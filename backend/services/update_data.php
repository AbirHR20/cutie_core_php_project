<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
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
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `services` SET `title`='$title',`short_description`='$short_description',`icon`='$icon',`status`='$status'WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./service_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    