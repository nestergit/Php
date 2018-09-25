<?php session_start();
$ime=$_GET['ime'];
$prezime=$_GET['prezime']; 

function provjeriPrazno($ime,$prezime){
    if(!empty($ime) and !empty($prezime)){
        return 3; 
        
    }elseif(!empty($ime)and empty($prezime)){ 
        return 2; 
        
    }elseif(empty($ime) and !empty($prezime)){
        return 1; 
        
    }else{ return 0; 
    
    }
    }
    
    provjeriPrazno($ime,$prezime);
    
    $funkcija_provjeriPrazno=provjeriPrazno($ime,$prezime);
    
    if($funkcija_provjeriPrazno=3){ 
        $_SESSION['ime_prezime']=$ime."_".$prezime; 
        foreach($_SESSION as $kljuc=>$vrijednost){
            if($kljuc==$ime){ 
                unset($_SESSION[$kljuc]); 
                
            }elseif($kljuc==$prezime){ 
                unset($_SESSION[$kljuc]); 
                
            } } } 
            ?>

