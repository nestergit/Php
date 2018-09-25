<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(empty($_POST['ime']) || empty($_POST['prezime']))
    
{
    echo "Nisu uneseni podaci";
}
elseif (isset ($_POST['ime']) && isset ($_POST['prezime'])) {
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    
    echo "Vase ime je:" . $ime . "a prezime" .$prezime;

}
?>
