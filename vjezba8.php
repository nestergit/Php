<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$argumenti=  array('prvi'=>2,'drugi'=>"foo",'treci'=>3);
function funkcija()
{
    $izlaz=  array();
    $izlaz[3]=0;
    foreach ($argumenti as$k =>$v) {
        if(is_int($v))
        {
        $izlaz[0]=$v."";
    }
    if(is_double($v)){
        $izlaz[1]=$v."";
    }
    if(is_string($v)){
        $izlaz[2]=$v."";
    }
    echo $izlaz[3]+=1 . "" ;}
return $izlaz;
}
echo "Neka funkcja".  funkcija();



?>
