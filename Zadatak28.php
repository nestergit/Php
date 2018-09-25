<?php 
session_start();
$trenutni_datum=date("Y-m-d");
foreach($_POST as $kljuc=>$vrijednost){
    if($kljuc=="kategorija"){
        echo ispis_akcije($vrijednost); 
        
    }else{ 
        if($kljuc==="opis"){
            $_SESSION['opis']=$vrijednost; 
            
        }else{
            if($kljuc=="datum"){ 
                echo $trenutni_datum; 
                
            }else{ echo "Nepoznati parametar"; 
            
            } } } } 
            
            function ispis_akcije($neki_niz){
                foreach($neki_niz as $k=>$v){
                    switch($v){ 
                        case 1:
                            echo "Akcije je košnja trave"; 
                            break; 
                        default: 
                            echo "Nepoznata akcija"; 
                            
                    } } } 
                    
                    ?>

