<?php 
session_start(); 

$predbroj=$_POST['predbroj']; 
$broj=$_POST['broj']; 

function VidljivostPredbroja($predbroj){ 
    switch($predbroj){ 
        case 91: 
        case 95: 
        case 98: 
            return true; 
            break; 
        default:
            return false; 
            
    } } 
    $vidljivost_predbroja=VidljivostPredbroja($predbroj);
    
    if($vidljivost_predbroja==true){ 
        $_SESSION['cijelibroj']=$predbroj."_".$broj; 
        
    } 
    
    foreach($_POST as $kljuc=>$vrijednost){ 
        if($kljuc=="predbroj"){
            for($i=0;$i<$predbroj;$i++){ 
                echo $_SESSION['cijelibroj']; 
                
            } } } 
            
            ?>
