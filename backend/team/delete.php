<?php
require_once("../db_connect.php");
$id = $_GET["id"];
$team = "SELECT `t_img` FROM team";
$team_query = mysqli_query($db_connect, $team);
$team_img_name = mysqli_fetch_assoc($team_query)["t_img"];
unlink("../../uploads/team/" . $team_img_name);
$delete_query = "DELETE FROM team WHERE id=$id";
mysqli_query($db_connect, $delete_query);
header("location:./team_list.php");