<?php
$ind_niz1=array(1,2,3,4,5,6);
$ind_niz2=array(1,5,2); 
$odabrani=array(); 

function funkcija($argument_prvi,$argument_drugi){
    global $odabrani; 
    foreach($argument_prvi as $pozicija1=>$vrijednost1){ 
        foreach($argument_drugi as $pozicija2=>$vrijednost2){ 
            if($pozicija1!==$pozicija2 and $vrijednost1==$vrijednost2){ 
                array_push($odabrani,$vrijednost1); }
                } }
                return $odabrani;
                } 
                echo "<pre>";
                print_r(funkcija($ind_niz1,$ind_niz2)); 
                echo "</pre>"; 
                ?>
