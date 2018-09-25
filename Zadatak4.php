<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$operacija=$_POST['operacija'];
$korime=$_POST['korime']; 
$lozinka=$_POST['lozinka']; 
$a=$_POST['a']; 
$b=$_POST['b']; 
$c=$_POST['c']; 
$brojevi=array(); 
array_push($brojevi,$a,$b,$c);

function login ()
{ if($korime=="admin" and $lozinka==="administrator")
    { return true; }
    else{ return false; } }
function izracun($indeksirani_niz,$operacija){ switch($operacija)
    { case 1: $broj_elemenata=count($indeksirani_niz); 
        $suma=0; 
    foreach($indeksirani_niz as $broj){ $suma=$suma+$broj; }
    $aritmeticka_sredina=$suma/$broj_elemenata; 
    echo "Aritmetička sredina je"." ". $aritmeticka_sredina; break;
    
    case 2: echo "Računa se mod - nije implementirano"; break; 
    case 3: echo "Računa se medijan - nije implementirano" ;break;
    default: echo "Pogrešna operacija"; } }
    $provjera_korisnickog_imena=login();
    if($provjera_korisnickog_imena==true)
        { izracun($brojevi,1); } ?>