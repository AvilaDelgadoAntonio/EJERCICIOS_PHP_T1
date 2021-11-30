<?php
/*Realizar un programa que pida al usuario una multiplicación de la tabla del 1 al 9. El programa le indicará si ha acertado o no. (Sesiones).*/
    session_start();
    $_SESSION['aciertos'] = 0;
    header('Location: 2.2.php'); 
?>
