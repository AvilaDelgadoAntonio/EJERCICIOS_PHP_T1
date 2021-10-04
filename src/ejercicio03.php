<?php
/*Realizar un programa que convierta de grados Celsius a grados Farenheit según la ecuación: F=1,8*C+32.*/
echo "La temperatura en grados Celsius es: ",$_POST ["celsius"];
		$farenheit=1.8*$_POST ["celsius"] + 32;
	echo "<br>Y esa temperatura en grados Farehheit es: $farenheit";
?>