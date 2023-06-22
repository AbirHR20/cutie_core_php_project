<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        $id = $_POST["id"];
        $d_skills_name = htmlspecialchars(trim($_POST["d_skills_name"]));
        $d_skills_percentage = htmlspecialchars(trim($_POST["d_skills_percentage"]));
        $d_skills_status = htmlspecialchars(trim($_POST["d_skills_status"]));

        $flag = false;


        if(!$d_skills_name){
            $flag = true;
            $_SESSION["d_skills_name_error"] = "design skills name is required";
        }else{
            $_SESSION["old_d_skills_name"] = $d_skills_name;
        }
        if(!$d_skills_percentage){
            $flag = true;
            $_SESSION["d_skills_percentage_error"] = "design skills percentage is required";
        }else{
            $_SESSION["old_d_skills_percentage"] = $d_skills_percentage;
        }

        if($flag){
            header("location:./update.php");
        }else{
            $insert_update_query = "UPDATE `d_skills` SET `d_skills name`='$d_skills_name',`d_skills percentage`='$d_skills_percentage',`d_skills status`='$d_skills_status'WHERE id=$id";
            mysqli_query($db_connect, $insert_update_query);
            header("location:./d_skills_list.php");
            $_SESSION["success"] = "Data updated Successfully";
        }

    ?>

    