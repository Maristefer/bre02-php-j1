<?php

function concat(string $str1, string $str2) : string {
    
    return $str1.$str2;
    
   
}

    echo concat("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne
    echo concat("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne
    echo concat("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne
    
?>
    



