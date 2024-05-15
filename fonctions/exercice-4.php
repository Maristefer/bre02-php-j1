<?php 
function getFirst(array $tab) : ? int 
{
    
        if(count($tab) > 0) 
        {
            
            return $tab[0];
            
        }
        
        return null;
}

echo getFirst([13, 24, 45])."<br>"; // doit afficher 13
echo getFirst([]) . "-<br>"; // doit afficher null

?>