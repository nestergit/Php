<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$operacija=$_POST['operacija'];
//1,2,3,
 function kreirajNiz(){ $a =$_POST['a']; // 1
  $b =$_POST['b']; // 3
  $indNiz=array();
  for($i=$a;$i<=$b;$i++){
      $indNiz[]=$i; } 
      return $indNiz; } 
      
      function izracun($indNiz,$operacija){
          switch($operacija)
          { case 1: $suma=0;
              foreach($indNiz as $broj){
                  $suma=$suma+$broj; }
                  echo "Suma brojeva je:".$suma ;
                  break;
                  case 2:
                  case 3: echo "Nije implementirana operacija"; break;
                  default; echo "Pogrešna operacija"; 
                  
              } } $vrati=kreirajNiz();
              izracun($vrati,$operacija);
              ?>
