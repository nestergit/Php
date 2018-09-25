<?php 
session_start();
$ime="Pero"; //$_GET['ime'];
$prezime="Perić"; //$_GET['prezime'];
$godina="1990"; //$_GET['godina'];


 if(!empty($ime)and !empty($prezime) and !empty($godina)){ 
     $_SESSION['ime']=$ime; 
     $_SESSION['prezime']=$prezime; 
     $_SESSION['godina']=$godina; 
     echo ispisiPodatke();
     echo "<br>"; 
     echo globalne(); } 
     
     function ispisiPodatke(){ 
         $spoji=""; 
         foreach($_SESSION as $k=>$v){
             $spoji=$spoji.$v.",";   
         } 
         return $spoji; } 
         
         function globalne(){ 
             global $ime; 
             global $prezime;
             global $godina; 
             echo $ime." ".$prezime." ".$godina; 
             
         }
         ?>



