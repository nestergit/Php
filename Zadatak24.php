<?php 
$podaci=array("temp","vlaga"); 

if(isset($_GET['vrsta'])){ 
    echo "Nije unesena vrsta"; 
    
}else{ 
    foreach($podaci as $podatak){
        if($podatak===$_GET['vrsta']){
            obradi($_GET['vrsta']); 
            
        }else{ 
            echo "Nepoznata vrijednost za vrstu prognoze"; 
            
        } } } 
        
        function obradi($prognoza){
            if(isset($_GET['izmjereno'])){
                $prognoza."=".$_GET['izmjereno']; 
                
            }else{ 
                $prognoza."= ERROR";
                } } 
                ?>

