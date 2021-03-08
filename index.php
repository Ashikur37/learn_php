<?php


function isPrime($x){
    
    //check is prime or not
    for($i=2;$i<$x;$i++){
        if($x%$i==0){
            return false;
        }
    }
    //11

// x i

// 11 2  11 3 11 4 11 5 11 6 11 7 11 8 11 9 11 10

//12 
    return true;
    //return true if prime

    //return false not prime
}


for($i=1;$i<=1500;$i++){
    if(isPrime($i)){
        echo $i."<br>";
    }
}
?>





