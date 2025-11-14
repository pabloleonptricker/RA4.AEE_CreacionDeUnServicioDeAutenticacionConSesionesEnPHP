<?php
//Configuración: 
//Almacena la lista de usuarios válidos (el array predefinido) 
//y puede contener la lógica de session_start() para centralizar 
// la gestión de sesiones.

//Concepto PHP Clave: 
//Arrays (para usuarios), sesiones (session_start(), $_SESSION)

//Centralización del inicio de sesión:
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Definición de array de usuarios válidos:
$usuarios = [
    'carlosbasulto' => '1234',
    'pavloleon' => '1111',
    'admin' => 'admin'
];


?>