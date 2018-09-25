<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$tekstovi=array("Pero","Mato","Ivo","Pero","Mato"); 
$sumarus=array(); 

$br_pozicija = count($tekstovi);

foreach($tekstovi as $poz=>$ime)
    { $brojac=0; 
foreach($tekstovi as $ime2){ 
    if($ime==$ime2)
    { $brojac++;
    $sumarus[$ime]="ime se pojavljuje ".$brojac." puta sa prosjecnim pojavljivanjem ".$brojac/$br_pozicija;
    } } } 
    foreach ($sumarus as $key=>$value){ echo $key." ".$value."<br>"; }
    ?>