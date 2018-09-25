<?php 
session_start(); 
$ulica=$_GET['ulica']; 
$broj=$_GET['broj']; 

function provjeriUlicu(){ 
    global $ulica; 
    if(!isset($ulica)and empty($ulica)){
        return false; 
        
    }else{ 
        if($ulica==="pavlinska"){
            $_SESSION['FOI']=true; 
            
        }else{ return true; } } }
        
        $provjera=provjeriUlicu(); 
        
        if($provjera==false){ 
            echo "Nema unosa"; 
            
        }else{ 
            if($_SESSION['FOI']==true){
                for($i=0;$i<$broj;$i++){
                    echo "FOI";
                    }
                    }else{
                        echo "Nije FOI"; 
                        
                    } } 
                    ?>

