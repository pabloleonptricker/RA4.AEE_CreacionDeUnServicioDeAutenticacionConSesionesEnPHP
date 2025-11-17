<?php
//Cierre de sesión:
//Destruye la sesión activa y redirige al usuario de vuelta 
//a la pantalla de login.

//Concepto PHP Clave: 
//session_start(), session_destroy(), header() para redirección.

//Incluir Configuración:
require_once 'config.php';

//Borrar las variables de sesión del array $_SESSION.
$_SESSION = array(); 

//Destruir la sesión en el servidor.

session_destroy();

//Redirigir al formulario de login para que el usuario pueda volver a entrar.
header("Location: login.php");
exit();
?>