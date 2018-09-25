<?php 
session_start();
$cijena1=$_GET["cijena1"];
$cijena2=$_GET["cijena2"]; 
$cijena3=$_GET["cijena3"];

$cijene=array();
array_push($cijene, $cijena1, $cijena2, $cijena3);

if($_SESSION["ukupno"]>200){
    session_destroy(); 
    echo "<br>Sesija uništena!"; 
    
} else{ 
    echo"<br>Zbroj je manji od 200!"; 
    
} 
ukupnaCijena(); 

function ukupnaCijena(){ 
    global $cijene; 
    $zbroj=0;
    if(isset($_SESSION["ukupno"])){
        foreach ($cijene as $k => $v){ 
            $zbroj+=$v;
            $_SESSION["ukupno"]= $zbroj;
            }
            } else{ 
                $_SESSION["ukupno"]= 0; 
                
            } 
            return $zbroj; 
            
            }
            ?>

