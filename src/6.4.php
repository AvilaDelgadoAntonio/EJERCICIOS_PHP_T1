<?php

    session_start();
    $contraseña = $_POST['contraseña'];
    if ($contraseña == "admin") {
        echo "Bienvenido ", $_SESSION['usuario'];
    } else {
        echo "Contraseña incorrecta";
    }

?>