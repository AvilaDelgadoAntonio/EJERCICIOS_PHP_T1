<?php
/*Realizar un programa que
solicite mediante un formulario el nombre de una persona, compruebe si
existe en un fichero de texto, donde tenemos guardado el nombre de los
usuarios.
En caso de que exista el nombre, se llama a otro formulario que pedirá la
contraseña, que es común para todos los usuarios y está definida en el
propio programa, si es correcta, se le mostrará el Siguiente mensaje de
bienvenida: “Bienvenido al sistema Nombre de Usuario”, en caso contrario se le informará de que los datos no son correctos. (Ficheros y Sesiones).*/

    session_start();
    $_SESSION['usuario'] = $_POST['user'];
    if( strpos(file_get_contents("./6.txt"),$_SESSION['usuario']) !== false) {
        header('Location: 6.3.php');
    } else {
        echo "no existe";
    }

?>