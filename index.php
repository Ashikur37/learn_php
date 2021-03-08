<?php
$students=[
    [
        "name"=>"Shanto",
        "id"=>315163005
    ],
    [
        "name"=>"Raju",
        "id"=>315163002
    ],
    [
        "name"=>"Arman",
        "id"=>315163001
    ],
];
    foreach($students as $student){
        // var_dump($student);
        if($student["id"]%2==0){
            echo "Even ".$student["name"]."<br>";
        }
        else{
            if($student["name"]=="Shanto"){

                echo "Odd ".strrev($student["name"])."<br>";
            }
            else{
                echo "Odd ".$student["name"]."<br>";

            }

        }
    }

?>