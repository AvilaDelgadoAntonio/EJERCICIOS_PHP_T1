<?php
/*Realizar un programa que calcule e imprima la longitud y la superficie
de una circunferencia cuyo radio se solicite por teclado. (L=2 * pi * R),
(S=pi * R2 ). Donde pi es una constante que vale 3,14159. Definir pi
como una constante usando "define".*/
define('pi', '3.14159');
	echo "El RADIO es: ",$_POST ["radio"];
		$longitud=2*pi*$_POST ["radio"];
	echo "<br>Con ese radio, la longitud de la circunferencia correspondiente es: $longitud";
		$superficie=pi*$_POST ["radio"]*$_POST ["radio"];
	echo "<br>Con ese radio, la superficie de la circunferencia correspondiente es: $superficie";
?>
