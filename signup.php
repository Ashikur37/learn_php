
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
        $age=$_POST["age"];
        $sql="insert into users values(null,'$username','$password',$age)";
        $mysqli->query($sql);
        echo "Signup success";
        ?>
        <a href="login.php">Login Now</a>
        <?php
        die();
        $signupError="Invalid username or password";
        
    }
?>
        <form action="signup.php" method="post">
               Username <input required type="text" name="username"><br>
                Password<input required type="password" name="password"><br>   
               Confirm Password <input required type="password" name="con_password"><br>        
                Age <input required type="number" name="age"><br>
                <button>Signup Now</button><br>
                <?php
                    if(isset($signupError)){
                        echo $signupError;
                    }
                ?>
        </form>
</body>
</html>