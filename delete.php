<?php
include_once("db.php");
$id=$_GET["id"];
    $mysqli->query("delete from tasks where id=$id");
    header('location:list.php');
?>