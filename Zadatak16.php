<?php 
session_start();

$g1="Mate"; //$_GET['G1']="Pero"; 
$g2="Mate"; //$_GET['G2']="Mate";

$_SESSION['K1']=$g1; 
$_SESSION['K2']=$g1;

ispis($g1); 

function ispis($g1){ 
    global $g1;
    global $g2; 
    if($g1==="Pero"){ 
        echo "Ja sam Pero";
        }elseif($g1=="Mate"){
            $duljina_teksta=strlen($g1);
            for($i=0;$i<$duljina_teksta;$i++){
                echo $g1."<br>";
                } }elseif($g1!=="Pero"){
                    $brojac=0; 
                    while($brojac<10){ 
                        echo $g1."<br>";
                        $brojac++;
                        } } } 
                        ?>
 

