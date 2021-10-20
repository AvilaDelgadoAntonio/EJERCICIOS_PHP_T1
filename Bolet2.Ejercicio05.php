<?php
/*Realizar un programa que calcule : X+ 2*X^2+3*X^3+...+N*X^N. Donde N es un número al
azar entre 2 y 10 y X es un número al azar entre 1 y 4.*/

$n=mt_rand(2,10);
$x=mt_rand(1,4);
echo "número N al azar: $n";
echo "<br>número X al azar: $x";
$suma=0;
for ($i = 0; $i <= $n; $i++) 

{	
	$suma=$suma + $i*pow($x,$i);
	echo "<br>,".$i*pow($x,$i);
}
echo " <br> el total de sumar los valores anteriores es  <br> ", $suma;
?>