<?php
require_once("../db_connect.php");
$id = $_GET["abcd"];
$delete_query = "DELETE FROM skills WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header("location:./skills_list.php");
?>