<?php 
session_start(); 
foreach($_GET as $k=>$v){
    if($k=="grad"){
        ispisi_gradove($v);
        }elseif($k=="broj"){
            upisi_brojeve($v);
            }elseif($k=="danas"){
                $datum=date("mm-dd-Y H:i:s");
                echo $datum;
                }else{ echo "Nepoznat parametar"; } }
                
                function ispisi_gradove($niz){ 
                    foreach($niz as $kljuc=>$vrijednost){
                        echo $kljuc."==>".$vrijednost."<br>";
                        if($kljuc==$_SESION['grad']){ setcookie('grad',$vrijednost); } } } 
                        
                        function upisi_brojeve($broj){
                            $zbroj=0;
                            for($i=0;$i<=$broj;$i++){ 
                                $zbroj=$zbroj+$i;
                                } 
                                $_SESSION['suma']=$zbroj;
                                }
                                echo $_SESSION['suma'];
                                if(isset($_COOKIE['grad'])){ 
                                    echo $_COOKIE['grad'];
                                    }else{ echo "Kolačić nije postavljen"; } ?>
