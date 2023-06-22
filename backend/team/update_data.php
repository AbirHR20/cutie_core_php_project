<?php

require_once("../db_connect.php");
session_start();

$t_img = $_FILES["t_img"]["name"];
$tmp_name = $_FILES["t_img"]["tmp_name"];
$t_name = htmlspecialchars(trim($_POST["t_name"]));
$t_role = htmlspecialchars(trim($_POST["t_role"]));
$t_description = htmlspecialchars(trim($_POST["t_description"]));
$id = $_POST["id"];

if ($t_img) {
    $team = "SELECT `t_img` FROM team";
    $team_query = mysqli_query($db_connect, $team);
    $team_img_name = mysqli_fetch_assoc($team_query)["t_img"];
    unlink("../../uploads/team/" . $team_img_name);
    $t_img_arr = explode(".", $t_img);
    $file_extension = end($t_img_arr);
    $new_name = date("Y_m_d") . "_" . $_SESSION["user_id"] . time() . "." . "$file_extension";
    $file_path = "../../uploads/team/" . $new_name;
    move_uploaded_file($tmp_name, $file_path);
    $update_query = "UPDATE `team` SET `t_img`='$new_name',`t_name`='$t_name',`t_role`='$t_role',`t_description`='$t_description' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./team_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
} else {
    $update_query = "UPDATE `team` SET `t_name`='$t_name',`t_role`='$t_role',`t_description`='$t_description' WHERE `id`='$id'";
    mysqli_query($db_connect, $update_query);
    header("location:./team_list.php");
    $_SESSION["success"] = "Data Updated Successfully";
}