<?php

function isOdd(int $number) : bool 
{
    if($number % 2 === 0) {
        
        return false;
    }
    
        return true;
        
    /*return $number % 2 !== 0;*/
}

echo isOdd(12) . "<br>"; // doit afficher 0 ou false
echo isOdd(29) . "<br>"; // doit afficher 1 ou true

?>