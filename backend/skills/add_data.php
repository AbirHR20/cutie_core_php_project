<?php

        session_start();
        $db_connect = mysqli_connect("localhost", "root", "", "cutie");

        
        $skills_name = htmlspecialchars(trim($_POST["skills_name"]));
        $skills_percentage = htmlspecialchars(trim($_POST["skills_percentage"]));
        $skills_status  = htmlspecialchars(trim($_POST["skills_status"]));

        $flag = false;


        if(!$skills_name){
            $flag = true;
            $_SESSION["skills_name_error"] = "skills name is required";
        }else{
            $_SESSION["old_skills_name"] = $skills_name;
        }
        if(!$skills_percentage){
            $flag = true;
            $_SESSION["skills_percentage_error"] = "skills_percentage is required";
        }else{
            $_SESSION["old_skills_percentage"] = $skills_percentage;
        }

        if($flag){
            header("location:./add.php");
        }else{
            $insert_query = "INSERT INTO `skills`(`skills name`, `skills percentage`,  `skills status`) VALUES ('$skills_name','$skills_percentage','$skills_status')";
            mysqli_query($db_connect, $insert_query);
            header("location:./add.php");
            $_SESSION["success"] = "Data Inserted Successfully";
        }

    ?>

    