<?php
   
    function getConn(){
        $mysqli = mysqli_connect('mysql.hostinger.mx', 'u193840410_colegiobc', 'C12345678x', 'u193840410_colegiobc');
        if (mysqli_connect_errno($mysqli))
        echo "Fallo al conectar al MSQL: " . mysqli_connect_error();
        $mysqli->set_charset('utf8');
        return $mysqli;
        
    }