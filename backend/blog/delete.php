<?php
require_once("../db_connect.php");
$id = $_GET["id"];
$blog = "SELECT `b_img` FROM blog";
$blog_query = mysqli_query($db_connect, $blog);
$blog_img_name = mysqli_fetch_assoc($blog_query)["b_img"];
unlink("../../uploads/blog/" . $blog_img_name);
$delete_query = "DELETE FROM blog WHERE id=$id";
mysqli_query($db_connect, $delete_query);
header("location:./blog_list.php");