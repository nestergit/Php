<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$host="localhost";
$user="iwa";
$pass="iwa_2014";
$db="iwa_2014-ispit";
        
$dbc=  mysqli_connect($host, $user, $pass, $db);
if (!$dbc){
    echo "Nemogu se spojiti".mysqli_error();
    
}
if (!empty($_GET['naslov']) && !empty($_GET['tip']) && !empty($_GET['cijena'])){
    
    $naslov=$_GET['naslov'];
    $tip=$_GET['tip'];
    $cijena=$_GET['cijena'];
    
    $sql="SELECT naslov FROM cjenik";
    $result=  mysqli_query($dbc, $sql);

    $vecPostoji=FALSE;
    while ($row=  mysqli_fetch_assoc($result)){
        if ($row['naslov']==$naslov){
            $vecPostoji=true;
            break;
        }
    }
    if($vecPostoji==TRUE){
        echo "Postoji taj naslov";
    }else{
        echo "Unosim novi proizod";
        $sql="INSERT INTO cjenik (naslov,tip,cijena)VALUES ('$naslov','$tip','$cijena')";
        mysqli_query($dbc, $sql);
        session_start();
        $_SESSION['Novi Proizvod']=$naslov;
    }
 else {
        echo "Morate unjeti sve parametre";    
    }
    
}
mysqli_close($conn);
?>