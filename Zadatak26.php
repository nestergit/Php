<?php 
session_start();
$novi_niz=array();
foreach($_GET as $kljuc=>$vrijednost){
    if($kljuc=="biljka"){ 
        $_SESSION['biljka']=$vrijednost;
        }elseif($kljuc="životinja"){
            setcookie("životinja",$vrijednost);
            }else{ 
                array_push($novi_niz,$vrijednost); 
                
            } }
            ispisiSve($novi_niz); 
            
            echo $_SESSION['biljka'];
            echo $_COOKIE['životinja'];
            
            function ispisiSve($novi_niz){
                foreach($novi_niz as $vrijednost){ 
                    if($vrijednost!=="Pero"){ 
                        echo $vrijednost."<br>";
                        } } }
                        
                        ?>

