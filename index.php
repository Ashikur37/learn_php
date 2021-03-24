<?php
   $persons=
//    [
    [
        "name"=>"Bill",
        "age"=>25,
        "gender"=>"Male",
        "address"=>"Dhaka"
    ];
//     [
//         "name"=>"Bejos",
//         "age"=>27,
//         "gender"=>"Male"
//     ],
//     [
//         "name"=>"Julia",
//         "age"=>29,
//         "gender"=>"FeMale"
//     ],
//    ];

   foreach($persons as $key=>$value)
    {
        echo $key."<br>";
    }
?>