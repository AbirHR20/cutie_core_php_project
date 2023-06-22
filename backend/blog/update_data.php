<?php

require_once("../db_connect.php");
session_start();

$b_img = $_FILES["b_img"]["name"];
$tmp_name = $_FILES["b_img"]["tmp_name"];
$b_date = htmlspecialchars(trim($_POST["b_date"]));
$b_title = htmlspecialchars(trim($_POST["b_title"]));
$id = $_POST["id"];

if ($b_img) {
    $blog = "SELECT `b_img` FROM blog";
    $blog_query = mysqli_query($db_connect, $blog);
    $blog_img_name = mysqli_fetch_assoc($blog_query)["b_img"];
    unlink("../../uploads/blog/" . $blog_img_name);
    $b_img_arr = explode(".", $b_img);
    $file_extension = end($b_img_arr);
    $new_name = date("Y_m_d") . "_" . $_SESSION["user_id"] . time() . "." . "$file_extension";
    $file_path = "../../uploads/blog/" . $new_name;
    move_uploaded_file($tmp_name, $file_path);
    $update_query = "UPDATE `blog` SET `b_img`='$new_name',`b_date`='$b_date',`b_title`='$b_title' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./blog_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
} else {
    $update_query = "UPDATE `blog` SET `b_date`='$b_date',`b_title`='$b_title' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./blog_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
}