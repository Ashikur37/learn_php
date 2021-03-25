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
            $valid=true;
            if(strlen($_POST["username"])<6){
                $valid=false;
                $usernameError="Length of username must be 6";
            }
            if(strcmp($_POST["password"],$_POST["confirm_password"])!=0){
                $valid=false;
                $passwordError="Passwords doesn't match";
            }
            else if(strlen($_POST["password"])<6){
                $valid=false;
                $passwordError="Length of password must be 6";

            }
            if($valid){
                header('location:second.php');
            }
        }
    ?>
        <form action="index.php" method="post">
                    <input placeholder="Enter username" type="text" name="username">
                    <?php
                        if(isset($usernameError)){
                            echo $usernameError;
                        }
                    ?>
                    <br>
                    <input placeholder="Enter password" type="password" name="password"><br>
                    <input placeholder="Confirm password" type="password" name="confirm_password">
                    <?php
                        if(isset($passwordError)){
                            echo $passwordError;
                        }
                    ?>
                    <br>

                <button>Submit</button>
        </form>
</body>
</html>