<?php
include_once("db.php");
$id=$_GET["id"];
$status=$_GET["status"];
if($status!=2){
    $updateStatus=$status+1;
    $sql="update tasks set status=$updateStatus where id=$id";
    $mysqli->query($sql);
    //$mysqli->query("update tasks set status=$updateStatus where id=$id");
}
    header('location:list.php');
?>