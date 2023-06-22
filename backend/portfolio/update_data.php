<?php

require_once("../db_connect.php");
session_start();

$portfolio_image = $_FILES["portfolio_image"]["name"];
$tmp_name = $_FILES["portfolio_image"]["tmp_name"];
$portfolio_category = htmlspecialchars(trim($_POST["portfolio_category"]));
$portfolio_status = htmlspecialchars(trim($_POST["portfolio_status"]));
$id = $_POST["id"];

if ($portfolio_image) {
    $portfolio = "SELECT `portfolio image` FROM portfolio";
    $portfolio_query = mysqli_query($db_connect, $portfolio);
    $portfolio_img_name = mysqli_fetch_assoc($portfolio_query)["portfolio image"];
    unlink("../../uploads/portfolio/". $portfolio_img_name);
    $portfolio_image_arr = explode(".", $portfolio_image);
    $file_extension = end($portfolio_image_arr);
    $new_name = date("Y_m_d") . "_" . $_SESSION["user_id"] . time() . "." . "$file_extension";
    $file_path = "../../uploads/portfolio/" . $new_name;
    move_uploaded_file($tmp_name, $file_path);
    print_r($new_name);
    $update_query = "UPDATE `portfolio` SET `portfolio image`='$new_name',`portfolio category`='$portfolio_category',`portfolio status`='$portfolio_status' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./portfolio_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
}else{
    $update_query = "UPDATE `portfolio` SET `portfolio category`='$portfolio_category',`portfolio status`='$portfolio_status' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./portfolio_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
}
