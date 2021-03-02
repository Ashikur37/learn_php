<?php
    // for($i=0;$i<=100;$i++){
    //     if($i%2==0){
    //         echo "<b style='color:red;'>$i</b><br>";
    //     }
    //     else{
    //         echo "<b style='color:green;'>$i</b><br>";
    //     }
    // }
    // <?php echo "output"; 
    // <?= "output"

            // $x=51;
            // echo $x%2==0?"Even":"Odd";
            //concat 
            //["red","green"][]
for($i=0;$i<=100;$i++){
        
            ?>
            <!-- <b style="color:<?=$i%2==0?'red':'green'?>"><?=$i?></b><br> -->
            <b style="color:<?=["red","green"][$i%2]?>"><?=$i?></b><br>
            <?php
        
    }
?>

    <!-- this is a html comment -->



