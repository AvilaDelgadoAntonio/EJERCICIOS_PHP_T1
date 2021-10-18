<?php
/*Realizar un programa que calcule e imprima la suma de : 1/2 + 2/22 +...+ N/2N.
Donde N se genera al azar y es un valor entre 2 y 10.*/

$cifra = 1/2;
$n=mt_rand(2,10);
for ($veces = $n; $veces <= 10; $veces++) 

{	
	$cifra = $cifra / $n;
	echo "número: $cifra";
}
?>