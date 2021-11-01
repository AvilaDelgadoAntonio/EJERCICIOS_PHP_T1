<?php
/*Realizar un programa que calcule la letra del DNI. El método consiste en dividir el número del DNI entre 23 y al resto de la división se le hace corresponder con una letra
del abecedario según la siguiente tabla.*/
$numero = $_POST["numero"];
$letras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E","T");
$indice = ($numero%23);
echo "<br>$numero = $letras[$indice]<br>";
?>
