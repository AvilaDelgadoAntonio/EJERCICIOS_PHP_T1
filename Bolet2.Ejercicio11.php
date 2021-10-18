<?php
/*Realizar un programa que genere 10 números al azar entre 20 y 35.
i) Imprimir los 10 números de mayor a menor separados por comas.
ii) Imprimir, separados por comas, los números sin repetir ninguno.
iii) Imprimir el mayor..*/
$taller = array("R01","R02","R03","R4","R5","R6");
$aula = array("R1"=>"1ASIR" ,"R2"=> "2ASIR" ,"R3"=> "1DAM","R4"=> "2DAM","R5"=> "1ESO","R5"=> "2ESO");

echo "Listado de aulas: <br>";
foreach ($taller as $key =>$value)
{
echo "$value";
}
?>