<?php
/*Ampliar el programa anterior para que en caso de que tarde más de 10
segundos en responder (cookie) se le informará que ha tardado demasiado
tiempo en responder y el programa finaliza, imprimiendo los aciertos.*/
    session_start();
    $_SESSION['aciertos'] = 0;
    header('Location: 4.2.php'); 
?>
