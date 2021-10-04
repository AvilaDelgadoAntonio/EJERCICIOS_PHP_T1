<?php
/*Realizar un programa que genere un número al azar entre 1 y 100.
Imprimir en pantalla, el cociente y el resto de dividir ese número por 9.*/

	$cifra=mt_rand(1,100);
	echo "El número es: $cifra <br>";	
	$resto = $cifra %9;
	echo "El RESTO de dividir el número por 9 es: $resto <br>";
	$cociente = ($cifra - $resto)/9;
	echo "El COCIENTE de dividir el número por 9 es: $cociente";
  	
?>

