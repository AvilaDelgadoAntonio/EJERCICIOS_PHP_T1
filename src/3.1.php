<?php
/*Ampliar el programa anterior para que si acierta se le vuelva a preguntar otra multiplicación. El programa acaba cuando se equivoca o si acierta tres veces. Al final se imprimirá el número de aciertos. (Sesiones)*/
    session_start();
    $_SESSION['aciertos'] = 0;
    header('Location: 3.2.php'); 
?>
