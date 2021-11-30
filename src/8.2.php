<?php
/*Realizar un programa que inicie una sesión con el nombre de un usuario que se introduce por teclado. Crear una cookie cuyo nombre sea el del usuario y cuyo contenido sea el número de veces que ha iniciado la sesión. Y que cada vez que inicie la sesión le salude diciéndole el número de veces que ha iniciado la sesión. (Cookies)*/

    $usuario = $_POST['usuario'];
    $sesiones = 1;
    $sesiones += 1;
    setcookie("usuario", $usuario);
    setcookie("sesiones", $sesiones);

    echo $_COOKIE["usuario"], "<br>";
    echo $_COOKIE["sesiones"]; 

?>