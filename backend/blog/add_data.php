<?php

require_once("../db_connect.php");
session_start();

$b_img = $_FILES["b_img"]["name"];
$tmp_name = $_FILES["b_img"]["tmp_name"];
$b_title = htmlspecialchars(trim($_POST["b_title"]));
$b_date = htmlspecialchars(trim($_POST["b_date"]));
$flag = false;

if ($b_img) {
    $b_img_arr = explode(".", $b_img);
    $file_extension = end($b_img_arr);
    $new_name = date("Y_m_d") . "_" . $_SESSION["user_id"] . time() . "." . "$file_extension";
    $file_path = "../../uploads/blog/" . $new_name;
    move_uploaded_file($tmp_name, $file_path);
}

if(!$b_title){
    $flag = true;
    $_SESSION["b_title_error"] = "Blog title is required";
}else{
    $_SESSION["old_b_title"] = $b_title;
}

if($flag){
    header("location:./add.php");
}else{
    $insert_query = "INSERT INTO `blog`(`b_img`, `b_date`, `b_title`) VALUES ('$new_name','$b_date','$b_title')";
    mysqli_query($db_connect, $insert_query);
    header("location:./add.php");
    $_SESSION["success"] = "Data Inserted Successfully";
}