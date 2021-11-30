<form action="9.2.php" method="post" style="border: 2px inset blue; text-align:center; width: 400px;">
	<p>Usuario: <input name="usuario" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field"></p>
	<p>Contraseña: <input name="contraseña" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field"></p>
	<p><input type="checkbox" name="recordar" />Recuerdame</p>
	<p><input type="submit" value="Login"></span></p>
</form>