<?php 
if(empty($_COOKIE)){ 
    $datum=date('d-m-Y'); 
    setcookie($datum,1); 
    
} 

foreach($_COOKIE as $kljuc=>$vrijednost){ 
    echo $kljuc." ".$vrijednost."<br>";
    if($kljuc===$datum){
        $vrijednost++; 
        break;
        } } 
        maxbrojklikovanadan($_COOKIE);
        
        function maxbrojklikovanadan($asocijativni_niz){ 
            $maximum=0;
            foreach($asocijativni_niz as $k=>$v){
                if($v>$maximum){ 
                    $maximum=$v;
                    $datum=$k; 
                    
                } } 
                echo "Maximum je bio".$maximum ."na dan ".$datum;
                }
                ?>
