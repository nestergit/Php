<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_GET)){
    $prezime=$_GET['prezime'];
    $ime=$_GET['ime'];
    if (empty($_GET['prezime'])||empty($_GET['ime']))
    {
                echo "Nesto je ostalo prazno";
}
else{echo $prezime . $ime;}
}?>
