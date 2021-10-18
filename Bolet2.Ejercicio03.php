<?php
/*Realizar un programa que calcule e imprima los valores y la suma de los N primeros
números pares mayores que cero, donde N es un número que se genera al azar entre 5
y 10.*/

$cifra = 2;
$n=mt_rand(5,10);
for ($veces = $n; $veces <= 10; $veces++) 

{	
	$cifra %2==0;
	echo "número: $cifra";
	echo " es PAR <br> ";
	$cifra = $cifra + 2;
}
?>