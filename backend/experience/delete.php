<?php
require_once("../db_connect.php");
$id = $_GET["abcd"];
$delete_query = "DELETE FROM experience WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header("location:./experience_list.php");
?>