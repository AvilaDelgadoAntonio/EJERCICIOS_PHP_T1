<?php
/*Inicializar un array cuyo índice sean los nombres de las aulas y cuyo valor sea el
nombre del curso. Imprimir el aula con el curso correspondiente. Aulas de la R1 a la R6.*/
$taller = array("R01","R02","R03","R4","R5","R6");
$aula = array("R1"=>"1ASIR" ,"R2"=> "2ASIR" ,"R3"=> "1DAM","R4"=> "2DAM","R5"=> "1ESO","R5"=> "2ESO");

echo "Listado de aulas: <br>";
foreach ($taller as $key =>$value)
{
echo "$value";
}
?>