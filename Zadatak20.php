<?php session_start(); 
$broj1=1; //$_GET['broj1'];
$broj2=10; //$_GET['broj2']; 


$_SESSION['broj1']=$broj1; 
$_SESSION['broj2']=$broj2; 

if($broj1==$broj2){ 
    echo "Brojevi su jednaki"; 
    
}elseif($broj2<$broj1){
    $broj=0; 
    while($broj<$broj2){ 
        echo $broj1." "; 
        $broj++; } 
        
    }elseif($broj1<$broj2){ 
        echo zbrojiBrojeve(); } 
        
        function zbrojiBrojeve(){
            global $broj1; 
            global $broj2; 
            $zbroj=0; 
            for($i=$broj1+1;$i<$broj2;$i++){
                $zbroj=$zbroj+$i;
                } 
                return $zbroj;
                } 
                ?>
