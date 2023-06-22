<?php
// print_r($_GET);
require_once("../db_connect.php");
$id = $_GET["abcd"];
$delete_query = "DELETE FROM services WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header("location:http://localhost/cutie-10/backend/services/service_list.php");
?>