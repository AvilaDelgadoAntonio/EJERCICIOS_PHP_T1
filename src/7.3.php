<?php

    session_start();
    $usuario = $_COOKIE['usuario'];
    $color = $_COOKIE['color'];
    echo "<p style='color:$color'>$usuario</p>";
    

?>