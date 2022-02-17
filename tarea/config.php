<?php
    define('HOST','localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'school');

    $con = mysqli_connect(HOST, USER, PASS, BD) OR die ('Error de Conexión');
/*
    if (!$con){
        echo 'error al conectar';
    }else{
        echo 'conectado';
    }
    
*/
?>