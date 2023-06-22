<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
        $skills_name = htmlspecialchars(trim($_POST["skills_name"]));
        $skills_percentage = htmlspecialchars(trim($_POST["skills_percentage"]));
        $skills_status = htmlspecialchars(trim($_POST["skills_status"]));

        $flag = false;


        if(!$skills_name){
            $flag = true;
            $_SESSION["skills_name_error"] = "skills name is required";
        }else{
            $_SESSION["old_skills_name"] = $skills_name;
        }
        if(!$skills_percentage){
            $flag = true;
            $_SESSION["skills_percentage_error"] = "skills percentage is required";
        }else{
            $_SESSION["old_skills_percentage"] = $skills_percentage;
        }

        if($flag){
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `skills` SET `skills name`='$skills_name',`skills percentage`='$skills_percentage',`skills status`='$skills_status'WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./skills_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    