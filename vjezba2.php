<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$cijena1=1;
$cijena2=2;
$cijena3=3;

$cijene= array();
array_push($cijena, $cijena1,$cijena2,$cijena3);

if ($_SESSION['ukupno']>200)
{
    session_destroy();
}

ukupnaCijena();

function ukupnaCijena()
{
    global $cijene;
    $zbroj=0;
    if(isset($_SESSION['ukupno']))
    {
        foreach ($cijene as $k=>$v){
            $zbroj=$zbroj+$v;
            $_SESSION['ukupno']=0;
        }
    }
    return $zbroj;
}



?>
