<?php 
$asocijativno_polje=array(); 
foreach($_GET as $kljuc=>$vrijednost){ 
    if(isset($vrijednost) and !empty($vrijednost)){ 
        $asocijativno_polje[$kljuc]=$vrijednost; 
        ispisiPolje($asocijativno_polje); 
        
    } } 
    
    function ispisiPolje($asoc_polje){ 
        foreach($asoc_polje as $k=>$v){
            if($v==1){ 
                echo "Vrijednost ".$k." elementa je ".$v."<br>";
                } 
                
            }
         } 
         
         ?>

