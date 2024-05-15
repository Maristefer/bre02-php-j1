<?php

function average(array $nb_tab) : float {
    
    $sum = 0;
    
    foreach($nb_tab as $number) {
        
        $sum = $sum + $number;
    }
    
    return $sum / count($nb_tab);
}


echo average([12, 15, 18, 9]). "<br>"; // doit afficher 13.5
echo average([12, 15, 18, 11, 14]). "<br>"; // doit afficher 14
?>