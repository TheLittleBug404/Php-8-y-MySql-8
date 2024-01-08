<?php
    $a = 5;
    $b = 6;
    echo "Primer parrafo <br>";
    if($a > $b){
        echo "Entramos al if<br>";
    }else{
        echo "Entramos al else<br>";
    }
    echo "Tercer parrafo<br>";
    //como añadir otra condicional en el else
    if($a > $b){
        echo "Entramos al if <br>";
    }elseif($a <= $b ){
        echo "Entramos al segundo if<br>";
    }
?>