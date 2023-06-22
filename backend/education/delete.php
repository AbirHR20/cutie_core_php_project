<?php
require_once("../db_connect.php");
$id = $_GET["abcd"];
$delete_query = "DELETE FROM education WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header("location:./education_list.php");
?>