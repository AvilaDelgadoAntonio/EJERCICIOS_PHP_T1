<?php
/*Realizar un programa que genere 10 números al azar entre 20 y 35.
i) Imprimir los 10 números de mayor a menor separados por comas.
ii) Imprimir, separados por comas, los números sin repetir ninguno.
iii) Imprimir el mayor.*/


//$n=mt_rand(10,35);
echo "DIEZ números al azar entre 20 y 35:";
//echo "<br>Los números pares mayores de cero son: ";
//$suma=0;
/*for ($i = 0; $i < 10; $i++) 

{	
	$n=mt_rand(10,35);
	echo "<br>$n";
}*/

$secuencia_diez = array(1=>0,0,0,0,0,0,0,0,0,0);
for ($i=1; $i < 10 ; $i++) { 
	$cifra=mt_rand(20,35);
	$secuencia_diez[$cifra]++;
	krsort($secuencia_diez);
	}
foreach ($secuencia_diez as $index => $resultado_decreciente) {
	echo "$resultado_decreciente<br><br>";
}

/*echo "<br> el total es: $suma <br> ";
$caras = array(1=>0,0,0,0,0,0);
for ($i=0; $i < 100 ; $i++) { 
	$cifra=mt_rand(1,6);
	$caras[$cifra]++;
}
foreach ($caras as $tiradas => $resultado) {
	echo "$tiradas: $resultado<br><br>";
}
?>

$veces=0;
do
{

	$cifra=mt_rand(20,50);
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
echo "<br> Veces: $veces";*/

?>

