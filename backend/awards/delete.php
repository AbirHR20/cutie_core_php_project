<?php
require_once("../db_connect.php");
$id = $_GET["abcd"];
$delete_query = "DELETE FROM awards WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header("location:./aw_list.php");
?>