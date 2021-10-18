<?php
/*Realizar un programa que calcule la letra del DNI. El método consiste en dividir el
número del DNI entre 23 y al resto de la división se le hace corresponder con una letra
del abecedario según la siguiente tabla.*/
$letras = "TRWAGMYFPDXBNJZSQVHLCKET";
$lugar=número_DNI %23;
$letra_DNI=letras.charAt(lugar);
echo "La letra es: $letra_DNI<br><br>";
?>
