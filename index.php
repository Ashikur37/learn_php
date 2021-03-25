<?php
include_once('db.php');
// server info
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $password=$_POST["password"];
    $age=$_POST["age"];

    $mysqli->query("insert into users values(null,'$username','$password',$age)");
    header('location:second.php');
}

	
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="post">
            <input name="username" type="text"><br>
            <input name="password" type="text"><br>
            <input name="confirm_password" type="text"><br>
            <input name="age" type="text"><br>
            <button>Insert</button>
        </form>
</body>
</html>