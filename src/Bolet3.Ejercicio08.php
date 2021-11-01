<?php
/*Realizar un programa que liste el contenido de cada uno de sus
subdirectorios del directorio www (D:\wamp64\www). (Usar scandir, is_dir y chdir).*/
echo "lista del directorio D:\wamp64\www <br>";
echo "<br>OBJETIVO: que en la lista aparecan CARPETAS y ARCHIVOS";
$contenido=scandir("/wamp64/www");
	foreach ($contenido as $key =>$value)
		{echo "<br>$value ";
}
/*Y ahora solo las carpetas del subdirectorio D:\wamp64\www\ejercicios1-AAD*/
echo "<br><br>Cambio directorio: lista del directorio D:\wamp64\www\ejercicios1-AAD <br>";
chdir("../");
$contenido=scandir(".");
echo "<br>OBJETIVO: que en la lista aparecan solo CARPETAS (NO archivos) <br>";
foreach ($contenido as $key =>$value){
	if(is_dir($value)){
		echo "<br>$value ";
	}
}
?>