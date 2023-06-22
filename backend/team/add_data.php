<?php

require_once("../db_connect.php");
session_start();

$t_img = $_FILES["t_img"]["name"];
$tmp_name = $_FILES["t_img"]["tmp_name"];
$t_name = htmlspecialchars(trim($_POST["t_name"]));
$t_role = htmlspecialchars(trim($_POST["t_role"]));
$t_description = htmlspecialchars(trim($_POST["t_description"]));
$flag = false;

if ($t_img) {
    $t_img_arr = explode(".", $t_img);
    $file_extension = end($t_img_arr);
    $new_name = date("Y_m_d") . "_" . $_SESSION["user_id"] . time() . "." . "$file_extension";
    $file_path = "../../uploads/team/" . $new_name;
    move_uploaded_file($tmp_name, $file_path);
}

if(!$t_name){
    $flag = true;
    $_SESSION["t_name_error"] = "Team name is required";
}else{
    $_SESSION["old_t_name"] = $t_name;
}

if(!$t_role){
    $flag = true;
    $_SESSION["t_role_error"] = "Team role is required";
}else{
    $_SESSION["old_t_role"] = $t_role;
}

if(!$t_description){
    $flag = true;
    $_SESSION["t_description_error"] = "Team Description is required";
}else{
    $_SESSION["old_t_description"] = $t_description;
}

if($flag){
    header("location:./add.php");
}else{
    $insert_query = "INSERT INTO `team`(`t_img`, `t_name`, `t_role`, `t_description`) VALUES ('$new_name','$t_name','$t_role','$t_description')";
    mysqli_query($db_connect, $insert_query);
    header("location:./add.php");
    $_SESSION["success"] = "Data Inserted Successfully";
}