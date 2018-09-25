<?php 
function ispisi(){ 
    foreach($_GET as $marka_automobila=>$kolicina){
        switch($marka_automobila){ 
            case "GT": 
                echo "GT"." ".$kolicina; 
                break; 
            case "VW": 
                echo "VW"." ".$kolicina;
                break;
            } 
            
        } 
        
        } 
        
        ispisi(); 
        
        ?>
