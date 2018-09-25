<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['submit']))
{
    echo "Postoji skripta";
}
$broj_jezika=  array("Petar"=>1,"Ivona"=>6,"Maja"=>7);
function jezici(){
global $broj_jezika;
        $num_ints=0;
        foreach ($broj_jezika as $b) {
if($b>=2)$num_ints++;            
        }
        return $num_ints;
}
echo "Broj korisnika koji govori vise od 1 stranog jezika je:".  jezici();
?>