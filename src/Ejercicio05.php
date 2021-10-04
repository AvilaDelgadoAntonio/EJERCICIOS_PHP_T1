<?php
/*Realizar un programa que genere un número al azar entre 1 y 100 y me diga si es par o impar. Un número es par si al dividirlo por 2 el resto es 0.*/

	$cifra=mt_rand(1,100);
	echo "El número es: $cifra <br>";	
	if ($cifra %2==0) 
	{
		echo "Dicho número es PAR";

		}else{

		echo "Dicho número es IMPAR";
	}  	
?>

