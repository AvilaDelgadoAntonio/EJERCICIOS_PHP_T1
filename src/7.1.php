<?php
/*Realizar un programa que pida el nombre del usuario y seleccione de una lista su color favorito, a continuación se creará una cookie con su nombre y cuyo contenido será su color favorito. La primera vez que se ejecute el programa imprimirá su nombre. Las próximas veces imprimirá su nombre escrito en su color favorito. (Cookies)*/
    
    session_start();
    $_SESSION['intentos'] += 1;

?>

<form action="7.2.php" method="POST">
    <p>Usuario: <input type="text" name="usuario"/></p>
    <p>Elige su color favorito:    
    <select name="color">
        <option value="red">rojo</option> 
        <option value="blue">azul</option> 
        <option value="green">verde</option>
        <option value="yellow">amarillo</option> 
        <option value="orange">naranja</option> 
        <option value="black">negro</option> 
    </select>
    </p>
    <p><input type="submit"/></p>
</form>