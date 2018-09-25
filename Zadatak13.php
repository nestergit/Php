<?php 

$natjecatelji=array(); 

foreach($_POST as $utrka=>$opis){
    foreach($_GET as $natjecatelj=>$utrka1){
        if($utrka==$utrka1){ 
            array_push($natjecatelji, $natjecatelj);
            //indeksirano polje => $natjecatelji[]=$natjecatelj; 
            } 
            
        } 
        ispisNatjecatelja($utrka,$natjecatelji); 
        } ispisKolacica(); 
        
        function ispisNatjecatelja($utrka,$natjecatelji){
            echo"<br>Natjecatelji utrke ".$utrka." su:";
            foreach($natjecatelji as $k=>$v){ 
                echo"<br>Natjecatelj ".$v; } 
                
                setcookie ($utrka, sizeof($natjecatelji)); } 
                
                function ispisKolacica()
                { foreach($_COOKIE as $k=>$v){ 
                    echo "<br>Kolačić ".$k." ima vrijednost ". $v;
                    } } 
                    ?>
