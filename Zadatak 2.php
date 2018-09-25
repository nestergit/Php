<?php
session_start();
$kategorija=$_POST['kategorija'];
$datumrod=$_POST['datumrod'];
$uprava=$_POST['uprava']; 
$imeprezime=$_POST['imeprezime']; 
if(!isset($kategorija) and !isset($datumrod) and !isset($uprava)
        and !isset($imeprezime))
    { echo "Niste unijeli sve potrebne podatke"; }
    else{ $osoba=$imeprezime; 
    foreach($_SESSION as $k=>$v){
            } if($k!==$osoba){
                 $_SESSION[$osoba]=$kategorija."/".$uprava;
                 }else{
                  $dijelovi=split('/',$v);
                  //$dijelovi=array($kategorija,$uprava); 
                  echo "Osoba:".$osoba."<br>"; 
                  echo "Kategorija:".$dijelovi[0]."<br>"; 
                  echo "Uprava:".$dijelovi[1]."<br>"; 
                  foreach($_SESSION as $kljuc=>$vrijednost){
                      if($kljuc==$datumrod){ $_SESSION[$datumrod]++; }
                      else{ $_SESSION[$datumrod]=1; } } } }  ?>