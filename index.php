<?php

$cities=["dhaka","chittagong","khulna","barishal","rajshahi"];

    for($i=0;$i<count($cities);$i++){
            echo str_replace("k","<b style='color:red'>k</b>","<b style='color:green'>".$cities[$i]."</b><br>");
    }
?>





