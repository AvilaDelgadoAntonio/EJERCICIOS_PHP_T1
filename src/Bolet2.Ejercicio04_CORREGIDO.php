<?php
/*Realizar un programa que calcule e imprima la suma de : 1/2 + 2/22 +...+ N/2N.
Donde N se genera al azar y es un valor entre 2 y 10.*/

$n=mt_rand(2,10);
echo "número al azar: $n";
echo "<br>La lista de resultados de las fracciones: ";
$suma=0;
for ($i = 1; $i <= $n; $i++) 
{	
	$lista_resultados_fracciones = $i/pow(2,$i);
	$suma=$suma + $lista_resultados_fracciones;
	echo "<br>$lista_resultados_fracciones";
}
echo "  <br>el total de sumar todos los números es $suma <br> ";
?>