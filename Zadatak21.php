<?php 
session_start(); 
if(isset($_POST)and !empty($_POST)){
    foreach($_POST as $kljuc=>$vrijednost){ 
        echo "<br>Parametar ".$kljuc." ima vrijednost ".$vrijednost; 
        $_SESSION[$kljuc]=$vrijednost; 
        ispisSesije(); } 
        
    }else{ 
        echo "Molimo ispunite sva polja"; 
        
    } 
    
    function ispisSesije(){
        foreach($_SESSION as $k=>$v){
            echo "Element ".$k." ima vrijednost ".$v."<br>";
            } 
            
        }
        ?>