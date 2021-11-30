<?php
/*Realizar un programa que lea a través de un formulario un número entre 1 y 100, para adivinar el número que el ordenador ha generado al azar, esto se realizará hasta que el usuario acierte, el programa le irá indicando al usuario si el número que ha dicho es menor o mayor del que debe adivinar. Al final imprimirá el número de veces que ha tardado. (Sesiones)*/
    session_start();
    $_SESSION['numero'] = mt_rand(1,100);
    $_SESSION['intentos'] = 0;
    header('Location: 5.2.php'); 
?>
