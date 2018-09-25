<?php session_start(); 

foreach($_POST as $kljuc=>$polje){
    if($kljuc=="tip"){ 
        if(is_array($polje)){ 
            foreach($polje as $k=>$v){ 
                $_SESSION[$k]=$v; 
                ispisi_sesiju(); 
                
            } } } } 
            
            function ispisi_sesiju(){
                foreach($_SESSION as $kljuc=>$vrijednost){
                    echo "Elementi sesije su: ".$kljuc." a vrijednosti ".$vrijednost;
                    } }
                    
                    ?>

