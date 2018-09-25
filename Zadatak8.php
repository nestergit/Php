<?php
// $_POST['oib']; 
// $_POST['uvjeti']; 
// $_POST['kandidat'];

if(!isset($_POST['oib']) and !isset($_POST['uvjeti']) and !isset($_POST['kandidat'])){
    echo "Nisu poslani svi podaci!";
    }
    
if(isset($_POST['oib']) and !empty($_POST['oib']) and isset($_POST['uvjeti']) and 
        !empty($_POST['uvjeti']) and isset($_POST['kandidat']) and !empty($_POST['kandidat'])){
    $kandidat=$_POST['kandidat'];
    if(isset($_COOKIE[$kandidat])){
        $kolacic=$_COOKIE[$kandidat];
        $_COOKIE[$kandidat]++; 
        setcookie($kandidat,$kolacic);
        }else{
            setcookie('kandidat',1); 
            
        } } 
        foreach($_COOKIE as $kljuc=>$vrijednost){ 
            echo $kljuc." je glasao ".$vrijednost." puta"; 
            
        } ?>