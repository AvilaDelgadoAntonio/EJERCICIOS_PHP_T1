<?php
/*Realizar un programa que genere un número al azar entre 1 y 10 y diga si es o no mayor que 5.*/

	$cifra=mt_rand(1,10);
	echo "El número es: $cifra <br>";
	
	if ($cifra >= 5) 
	{
		echo "El número es 5 o mayor";

		}else{

		echo "El número es menor de 5";
	}
  	
?>

