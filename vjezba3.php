<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$gradovi=  array("London","Berlin","Pariz","Milano");
function spoji(){
    global $gradovi;
    $a="";
    foreach ($gradovi as $b)
        $a=$a.$b."";
    return "$a";
}

echo spoji();
?>
