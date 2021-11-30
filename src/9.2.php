<?php
/*Realizar un programa, que en el acceso de un usuario, sea capaz de recordar la contraseña, si así lo desea, de un usuario a través de una cookie.*/

if(!empty($_POST["recordar"])) {
	setcookie ("usuario",$_POST["usuario"],time()+ 3600);
	setcookie ("contraseña",$_POST["contraseña"],time()+ 3600);
	echo "Cookie guardada";
} else {
	setcookie("usuario","");
	setcookie("contraseña","");
	echo "Error. Cookie no guardarda";
}

?>

<p><a href="9.1.php">Volver</a> </p>