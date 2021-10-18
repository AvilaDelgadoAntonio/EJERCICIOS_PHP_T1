<?php
/*Realizar un programa que genere números al azar entre 0 y 50. El programa acaba
cuando el número generado sea el 0. Se imprimirán los números generados, cuántos
son pares y cuántos impares*/

$veces=0;
do
{

	$cifra=mt_rand(0,50);
	echo "$cifra ";
		if ($cifra %2==0) 
	{
		echo " es PAR <br> ";

		}else{

		echo " es IMPAR <br> ";
	}  	

	$veces++;
}
while ($cifra !=0);
echo "<br> Veces: $veces";

?>

