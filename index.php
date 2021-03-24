<?php
    $array=["php","javascript","css","php","javascript","css"];
    $array=array("php","js");
    echo count($array);
    for($i=count($array)-1;$i>=0;$i--)
    echo $array[$i]."  ".$i."<br>";

    foreach($array as $x)
        echo $x."<br>";

?>