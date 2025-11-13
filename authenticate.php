<?php
//Procesamiento de credenciales:
//Recibe los datos del formulario de login.php, 
//los valida contra el array de usuarios y gestiona la sesión.

//Concepto PHP Clave: 
//session_start(), require_once (para config.php), $_POST, 
//validación de credenciales, $_SESSION, header().

//Inicio de sesión aprovechando el session start de config.php:
require_once 'config.php';
?>