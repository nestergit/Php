<?php
session_start();
$korime=$_POST['korime'];
$lozinka=$_POST['lozinka'];

function login(){
    global $korime;
    global $lozinka;
    
    if(!isset($korime)||empty($korime)||(!isset($lozinka)||empty($lozinka))){
                return FALSE;
}
 else {
    return true;    
}}
$poziv=login();
$_SESSION['nepoznato']=0;
if($poziv==FALSE){
    echo "Korisnik ne postoji";
    $_SESSION['nepoznato']++;
}

elseif ($poziv==TRUE){
    echo "Korisnik postoji";
    $_SESSION['nepoznato']=1;
}
?>