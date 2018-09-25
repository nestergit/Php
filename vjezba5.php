<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function zbroj($a,$b){
    $zbroj=0;
    for($a=$a+1;$a<$b;$a++){
        $zbroj=$zbroj+$a;
    }
    return $zbroj;
}

echo "Zbroj je".  zbroj(10, 15);
?>