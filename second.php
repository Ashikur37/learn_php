<?php
    include_once('db.php');

    $users=$mysqli->query('select * from users ');
    while($user = $users->fetch_object()){
        echo $user->username."  ".$user->password."   ".$user->age."<br>";
    }
    



