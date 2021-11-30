<?php

    session_start();
    $usuario = $_POST['usuario'];
    $color =  $_POST['color'];
    setcookie("usuario", $usuario);
    setcookie("color", $color);

    $usuario = $_COOKIE['usuario'];

    if ($_SESSION['intentos'] == 1) {
        echo $usuario;
    } else {
        header('Location: 7.3.php');
    }

?>