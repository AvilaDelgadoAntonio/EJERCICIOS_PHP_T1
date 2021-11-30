<?php

    session_start();
    $codpostal = $_SESSION['codpostal'];
    $nombre = $_SESSION['nombre'];
    $hermanos = $_SESSION['nombre'] = $_POST["hermanos"];

    echo $nombre;
    echo "<br>";    
    echo $codpostal;
    echo "<br>";    
    echo $hermanos;

?>