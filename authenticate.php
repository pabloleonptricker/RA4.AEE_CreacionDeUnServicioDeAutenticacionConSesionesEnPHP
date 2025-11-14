<?php
//Procesamiento de credenciales:
//Recibe los datos del formulario de login.php, 
//los valida contra el array de usuarios y gestiona la sesión.

//Concepto PHP Clave: 
//session_start(), require_once (para config.php), $_POST, 
//validación de credenciales, $_SESSION, header().

//Inicio de sesión aprovechando el session start de config.php:
require_once 'config.php';

//Verificación de que se han enviado los datos del formulario:
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: login.php");
    exit();
}

//Captura de datos
$username_ingresado = trim($_POST['username']);
$password_ingresada = $_POST['password'];

$login_exitoso = false;

//Validación de credenciales
// Verificamos si la clave (username) existe Y si el valor (password) coincide.
if (isset($usuarios[$username_ingresado]) && $usuarios[$username_ingresado] === $password_ingresada) {
    $login_exitoso = true;
}

//Establecer sesión y redirigir
if ($login_exitoso) {
    
    // Guardar el nombre de usuario en la sesión
    $_SESSION['username'] = $username_ingresado;
    
    // Guardar el tiempo de inicio de sesión para la pantalla de bienvenida
    $_SESSION['login_time'] = date("H:i:s");
    
    // Redirigir al área protegida
    header("Location: bienvenida.php");
    exit();
    
} else {
    //Si falla, redirigir de vuelta al login con un error
    header("Location: login.php?error=1");
    exit();
?>