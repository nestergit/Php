<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$indeksirani_niz=array("Pero",3.14,"Josip","Krešimir",20,5.5,"Maja",13,"Anita",56);

function informatorTipa2($niz)
{ $asocijativni=array(); 
$broj_int=0; 
$broj_double=0;
$broj_stringova=0; 
$broj_ostalih=0;
}
foreach($niz as $vrijednost)
    { if(is_integer($vrijednost)){ $broj_int++; $asocijativni['int']=$broj_int; }
    elseif(is_double($vrijednost)){ $broj_double++; $asocijativni['double']=$broj_double; }
    elseif(is_string($vrijednost)){ $broj_stringova++; $asocijativni['string']=$broj_stringova; }
    else{ $broj_ostalih++; $asocijativni['ostalo']=$broj_ostalih; }

return $asocijativni; } 
echo "<pre>"; print_r(informatorTipa2($indeksirani_niz));
echo "</pre>"; ?>