<?php 

$vrsta="k"; //$_GET['vrsta']; 
$korisnici=array("Marko","Petar","Krešo"); //$_GET['korisnici']; 

function provjera(){
    global $vrsta; 
    if($vrsta==="u"){ 
        ispis(true); 
        
    }else{
        ispis(false); 
        
    } }
    
    function ispis($usmeni){
        global $korisnici;
        if($usmeni){
            echo "Usmenom pristupaju:<br>";
            }else{ 
                "Pismenom pristupaju<br>"; 
                
            } 
            foreach($korisnici as $korisnik){
                if(strlen($korisnik)==1){
                    echo $korisnik." "; 
                    
                }else{ 
                    $broj_sati_na_posluzitelju=date("h"); 
                    for($i=0;$i<=$broj_sati_na_posluzitelju;$i++){
                        echo $korisnik; 
                        
                    } } } }
                    
                    echo provjera();
                    
                    ?>

