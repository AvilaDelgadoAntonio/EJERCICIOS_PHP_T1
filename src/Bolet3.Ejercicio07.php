<?php
/*A partir de los ficheros Capitales.txt y Países.txt. Realizar un programa que
muestre un país (de forma aleatoria) y le pida al usuario, en un formulario, que seleccione la capital. El programa le
dirá si ha acertado o no. En los ficheros se corresponde el primer país con la
primera capital, el segundo país con la segunda capital,...*/


$paises=file("paises.txt");
$cifra=mt_rand(1,48);
echo "<br>Indica la capital de: $paises[$cifra]";
<html>
<body>
<form action="Bolet3.Ejercicio07_IN PROGRESS.php" method="post">

<select name="capital">

<option>Paris</option>

<option>Madrid</option>

<option>Londres</option>

</select>
 <p><input type="submit" /></p>
</form>
</body>
</html>
if ($capitales[$cifra]==$_POST["capital"]) {
	echo "correcta";
}else{
	echo "INcorrecta";
}
?>
