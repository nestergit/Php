<?php
session_start();
define("POSLUZITELJ","localhost");
define("BAZA","zivotinje");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$korime=$_SESSION['korime'];
$lozinka=$_SESSION['lozinka'];
$vlasnik=$_GET['vlasnik'];
$brojVlastitihZivotinja=0;

$dbc=  mysqli_connect(POSLUZITELJ, $korime, $lozinka);
if(!$dbc) die ("Pogreska" .mysql_error ());

$db=  mysqli_select_db(BAZA, $dbc);
if(!$db) die ("Pogreska" .mysql_error ());

$sql=  sprintf("SELECT vrata,vlasnik,ime FROM moje_zivotinje WHERE vrsta='%s'",
 mysql_real_escape_string('pas'))**
 $upit=  mysql_query($sql);

 if (mysqli_num_rows($upit)>0){
     echo'<table>';
     while ($red = mysql_fetch_array($upit)) {
         echo "<tr>";
         echo "<td>" .$red['ime']."</td>";
         echo "<td>" .$red['vlasnik']."</td>";
         echo "<td>" .$red['vrsta']."</td>";
         echo "</tr>";
     }
     echo '</table>';
 }
 if(mysql_num_rows($upit)>0)
 {
     while ($red = mysql_fetch_array($upit)) {
if($red['vlasnik']==$vlasnik){
    echo"{$red['ime']}-{$red['vrsta']}-{$red['vlasnik']}<br>';
        $brojVlastitihZivotinja++;}
            }}

 if($brojVlastitihZivotinja>3){
     echo  Imate puno pasa;
         }
     else if($brojVlastitihZivotinja==0){
         echo Nemate niti jednog psa;
}

else{
echo Imate malo pasa;
}
mysql_close($dbc);
    ?>