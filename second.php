<?php
session_start();
if($_SESSION["login"]){

    echo $_SESSION["username"]." are logged in";

    echo "<br><a href='logout.php'>Logout now</a>";
}
else{
        header('location:index.php');
}
?>