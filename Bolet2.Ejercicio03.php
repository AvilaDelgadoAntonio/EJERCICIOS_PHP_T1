<?php
/*Realizar un programa que calcule e imprima los valores y la suma de los N primeros
números pares mayores que cero, donde N es un número que se genera al azar entre 5
y 10.*/

$n=mt_rand(5,10);
echo "número al azar: $n";
echo "<br>Los números pares mayores de cero son: ";
$suma=0;
for ($i = 1; $i <= $n; $i++) 

{	
	$pares = $i*2;
	$suma = $suma + $pares;
	
	echo "<br>$pares";
}
echo "<br> el total es: $suma <br> ";
?>