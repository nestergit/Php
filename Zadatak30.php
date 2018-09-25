<?php 
session_start(); 
// $_POST['temperature'] = array(15,28,33,7,22,30,19); 
 
$niz =array(15,28,33,7,22,30,19); //ovaj niz koristimo za provjeru umjesto 
//$_POST['temperature'] = array(15,28,33,7,22,30,19); 

function prosjecnaTemp($argument){ 
    $zbroj=0; 
    $broj_elemenata=count($argument);
    for($i=0;$i<$broj_elemenata;$i++){ 
        $zbroj=$zbroj+$argument[$i];
        } 
        $prosjek=$zbroj/$broj_elemenata;
        $_SESSION['prosjek']=$prosjek; 
        
    }
    
    function minmaxTemp($neki_niz){ 
        $najveca_temp=0; 
        $najmanja_temp=$neki_niz[0];
        foreach($neki_niz as $temperatura){
            if($temperatura>$najveca_temp){ 
                $najveca_temp=$temperatura; } 
                if($temperatura<$najmanja_temp){ 
                    $najmanja_temp=$temperatura; } } 
                    echo "Najveća temperatura je: ".$najveca_temp."<br>"; 
                    echo "Najmanja temperatura je: ".$najmanja_temp."<br>";
                    
                    echo "Prosječna temp je:". $_SESSION['prosjek']; } 
                    
                    prosjecnaTemp($niz); 
                    
                    minmaxTemp($niz); 
                    
                    ?>


