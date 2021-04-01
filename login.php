<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include_once('db.php');
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql="select * from users where username='$username' and password='$password'";
        $results=$mysqli->query($sql);
        while($result=$results->fetch_object()){
            
            $_SESSION["user_id"]=$result->id;
            $_SESSION["username"]=$result->username;
            header('location:add.php');
            //redirect add page
        }
        $loginError="Invalid username or password";
        
    }
?>
        <form action="login.php" method="post">
                <input type="text" name="username"><br>
                <input type="password" name="password"><br>        
                <button>Login Now</button><br>
                <?php
                    if(isset($loginError)){
                        echo $loginError;
                    }
                ?>
        </form>
</body>
</html>