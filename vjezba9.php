<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$korime=$_POST['korime'];
$lozinka=$_POST['lozinka'];

function login(){
    global $korime;
    global $lozinka;
    
    if(!isset($korime)||empty($korime)||(!isset($lozinka))||empty($lozinka))
    { return FALSE;}
    else{
return TRUE;}}
$poziv=  login();
$_SESSION['nepamtim']=0;
if ($poziv=false){
    echo "Korisnik ne postoji";
    $_SESSION['nepamtim']++;
}
elseif ($poziv=TRUE) {
    echo "Korisnik postoji";
    $_SESSION['nepamtim']=1;

}
