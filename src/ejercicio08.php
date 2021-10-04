<?php
/*Realizar un programa que lea mediante un formulario las pulgadas que
tiene la pantalla de un ordenador e imprima a cuantos centímetros de
diámetro corresponde. 1 pulgada = 2,54 centímetro. Definir las
pulgadas como una constante usando "define".*/
define('pulgada', '2.54');
	echo "La medida en pulgadas es: ",$_POST ["pulgadas"];
		$medida=$_POST ["pulgadas"]*pulgada;
	echo "<br>Lo cual equivale a la siguiente medida en CENTÍMETROS: $medida";
?>