<?php
/*Realizar un programa que convierta euros a libras.*/
echo "La cantidad en EUROS que quiere convertir es: ",$_POST ["euros"];
		$libras=$_POST ["euros"]*0.85;
	echo "<br>Y esa cantidad en LIBRAS es: $libras";
?>
