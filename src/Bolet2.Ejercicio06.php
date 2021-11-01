<?php
/*Realizar un programa que lea una frase mediante un formulario y
a. La imprima en mayúsculas.
b. Imprima su longitud.
c. La imprima al revés.*/

echo "La frase en mayúsculas es: ",strtoupper($_POST ["frase"]);
echo "<br> La longitud de la frase es: ",strlen($_POST ["frase"]);
echo "<br> La frase al revés es: ",strrev($_POST ["frase"]);
?>
