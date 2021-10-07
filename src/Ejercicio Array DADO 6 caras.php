<?php
/*tirar un dado de 6 caras 100 veces e imprimir cuantan veces ha salido cada cara*/

$caras = array(1=>0,0,0,0,0,0);
for ($i=0; $i < 100 ; $i++) { 
	$cifra=mt_rand(1,6);
	$caras[$cifra]++;
}
foreach ($caras as $tiradas => $resultado) {
	echo "$tiradas: $resultado<br><br>";
}
?>

