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
    
    for($i=0;$i<=100;$i++){
       
            ?>
            <b style='color:<?php 
                if($i%2==0)
                echo "red";
                else
                echo "green";
            ?>;'><?=$i?></b><br>
            
<?php
        
    }

?>

    <!-- this is a html comment -->



