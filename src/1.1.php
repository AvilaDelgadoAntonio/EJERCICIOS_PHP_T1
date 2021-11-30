<?php
/*Realizar un programa que le pida al usuario su nombre, a continuación llame a otro programa que imprima el nombre y le solicite el código postal, a continuación llame a otro que imprimirá el nombre y el código postal y solicitará el número de hermanos, 
a continuación llame a otro que imprimirá el nombre, el código postal y el número de hermanos. (Sesiones)*/

    session_start();

    $nombre = $_SESSION['nombre'] = $_POST["nombre"];
    echo $nombre

?>

<form action="1.2.php" method="post">
    <p>Su codigo postal: <input type="text" name="codpostal" /></p>
    <p><input type="submit"/></p>
</form>