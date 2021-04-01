<?php
session_start();
session_unset();
session_destroy();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Logout Successfull</h4>
    <a href="login.php">Login Again</a>
    <a href="signup.php">Signup</a>

</body>
</html>