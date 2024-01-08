<?php
//dentro del metodo define le pasaremos 2 parametros 
//1.- nombre de la constante
//2.- valor que le quiero asignar a esta constante
    define('pi','3.1416');
    define('USUARIO_1','Jauregui Lima Ricardo Fernando');
    define('ANIMALES',[
        'perro',
        'loro',
        'Buey',
        'Caballo'
    ]);//constante de tipo array
    //para llamar a la constante hacemos referencia al nombre de la constante
    echo pi;
    echo "<br>";
    echo USUARIO_1;
    echo "<br>";
    echo ANIMALES[0];//en caso de un array debemos acceder a la posicion del array

    //saber si se definio la constante USUARIO_1
    if(defined('USUARIO_1')){
        echo "<br>";
        echo "Se definio la constante USUARIO_1";
    }
    //estas constantes ya estandefinidas por PHP
    echo "<br>";
    echo "Mi version de PHP es: ".PHP_VERSION;
    echo "<br>";
    echo "Mi sistema operativo es: ".PHP_OS;
    echo "<br>";
    echo "Tipo de sistema operativo: ".PHP_OS_FAMILY;
?>