<?php 
$medalje=array(1=>"1000KN",2=>"500KN",3=>"250KN");
$rezultat=array("Pero"=>3,"Ana"=>2,"Luca"=>1); 

foreach($rezultat as $k=>$v){
    if($v===1){ $finalisti[1]=$k;
    }
    else if($v===2){ $finalisti[2]=$k; }
    else if($v===3){ $finalisti[3]=$k; } } 
    
    ispisiFinaliste($finalisti); 
    
    function ispisiFinaliste($finalisti){ 
        session_start(); 
        global $medalje; 
        for($i=3;$i>=1;$i--){ 
            
     //koristimo petlju da bi ispisali vrijednosti od manje prema vece odnosno unazad 
            
        echo"<br>".$finalisti[$i]." osvaja ".$medalje[$i];
        $_SESSION[$finalisti[$i]]=$medalje[$i]; 
        
        }
        } 
        ?>