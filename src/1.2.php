<?php

    session_start();
    $codpostal = $_SESSION['codpostal'] = $_POST["codpostal"];
    $nombre = $_SESSION['nombre'];
    echo $nombre;
    echo "<br>";    
    echo $codpostal;

?>

<form action="1.3.php" method="post">
    <p>Numero de hermanos: <input type="text" name="hermanos" /></p>
    <p><input type="submit"/></p>
</form>