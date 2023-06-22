<?php
// print_r($_GET);
require_once("../db_connect.php");
$id = $_GET["id"];
$portfolio = "SELECT `portfolio image` FROM portfolio";
$portfolio_query = mysqli_query($db_connect, $portfolio);
$portfolio_img_name = mysqli_fetch_assoc($portfolio_query)["portfolio image"];
unlink("../../uploads/portfolio/" . $portfolio_img_name);
$delete_query = "DELETE FROM portfolio WHERE id=$id";
mysqli_query($db_connect, $delete_query);
header("location:./portfolio_list.php");
