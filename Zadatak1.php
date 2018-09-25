<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

if(isset($_POST['obrisi']))
    { echo "Opcija nije implementirana"; }
    else{ if( isset($_POST['salji'])){
        obradi(); }
        else{ echo "Krivi parametri"; } }
function obradi(){ if(isset($_POST['tip'])==='o')
    { echo "Niste odabrali"; }
    else{ if($_POST['tip'] ==='p' or $_POST['tip'] ==='r')
        { $ime=$_POST['imeprezime']; 
        for($i=0;$i<strlen($ime);$i++)
        { echo $ime[$i]."<br>"; $_SESSION['Slovo'.$i]=$ime[$i]; } }
        else{ echo "Krivi parametri"; } } }
?>