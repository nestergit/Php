<?php
session_start();

$zbroj=0; 
$ind_niz=array(); 
foreach($_GET as $k=>$v){ 
    array_push($ind_niz,$v);
    $zbroj=$zbroj+$v; } 
    
    $_SESSION['suma']=$zbroj; 
    
    if($_SESSION['suma']>100){
        foreach($ind_niz as $vrijednost){
            echo $v." "; } 
            
        }else{ echo "Broj je manji ili jednak 100"; 
        
        } 
        ?>