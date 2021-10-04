<?php
/*Realizar un programa que genere al azar un número entre 0 y 255 e imprima su valor en binario y en hexadecimal.*/

	$cifra=mt_rand(1,255);
	echo "El número es: $cifra <br>";	
	$binario = sprintf("%08d",decbin($cifra));
	echo "Dicho número es equivalente en binario a: $binario <br>";
	$hexadecimal = dechex($cifra);
	echo "Dicho número es equivalente en hexadecimal a: $hexadecimal";
  	
?>

