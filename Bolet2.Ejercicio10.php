<?php
/*Inicializar un array con el curso de 2ASIR de informática donde el índice sean los
módulos que se imparten y el valor el profesor que imparte cada módulo.
Arrays: 2asir (“IAW=> “Jesus”, “SRI”=>”José Manuel”...)
II) Imprimir los módulos de 2asir.
III) Seleccionar el nombre de un profesor mediante un formulario tipo lista e imprimir el o los
módulos que imparte.
IV) Listar a los profesores de informática..*/
//$taller = array("IAW","R02","R03","R4","R5","R6");
$segundo_asir = array("IAW"=>"JESUS" ,"SRI"=> "JOSE MANUEL" ,"GBDLC"=> "ADOLFO","ASO"=> "ALFONSO","SAD"=> "JAIME","EIE"=> "AMPARO");

echo "Módulos de 2asir: <br>";
foreach ($segundo_asir as $clase =>$profesor)
{
echo "<br>$clase";
}

echo "<br><br>Profesor seleccionado: ",$_POST ["profesor"];

$key = array_search($_POST ["profesor"], $segundo_asir);

echo "<br><br> Los módulos que imparte son: $key";



echo "<br><br>Profesores de informática: ";
foreach ($segundo_asir as $clase =>$profesor)
{
echo "<br>$profesor";
}
?>