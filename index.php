<?php

$cities=["dhaka","chittagong","khulna","barishal","rajshahi"];

    for($i=0;$i<count($cities);$i++){
            echo str_replace("dhaka","<b style='color:red'>comilla</b>","<b style='color:green'>".$cities[$i]."</b><br>");
    }
?>





