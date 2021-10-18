<?php
/*Inicializar un array con el curso de 2ASIR de informática donde el índice sean los
módulos que se imparten y el valor el profesor que imparte cada módulo.
Arrays: 2asir (“IAW=> “Jesus”, “SRI”=>”José Manuel”...)
II) Imprimir los módulos de 2asir.
III) Seleccionar el nombre de un profesor mediante un formulario tipo lista e imprimir el o los
módulos que imparte.
IV) Listar a los profesores de informática..*/
$taller = array("R01","R02","R03","R4","R5","R6");
$aula = array("R1"=>"1ASIR" ,"R2"=> "2ASIR" ,"R3"=> "1DAM","R4"=> "2DAM","R5"=> "1ESO","R5"=> "2ESO");

echo "Listado de aulas: <br>";
foreach ($taller as $key =>$value)
{
echo "$value";
}
?>