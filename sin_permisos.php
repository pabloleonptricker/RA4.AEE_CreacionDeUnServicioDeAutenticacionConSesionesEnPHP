<?php
//Acceso denegado:
//Muestra un mensaje simple indicando que el acceso 
//no está permitido y proporciona un enlace directo a 
// login.php para que el usuario pueda intentar iniciar sesión.

//Concepto PHP Clave: 
//HTML básico, enlaces <a>, minimal uso de PHP.


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <!-- Carga de Tailwind CSS para estilos modernos y responsivos -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #171717; /* Negro mate */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <!-- Tarjeta de Error -->
    <div class="w-full max-w-md bg-neutral-800 rounded-2xl shadow-2xl p-8 sm:p-10 border-t-4 border-red-600 text-center">

        <!-- Icono de Acceso Denegado (Rojo para la alerta) -->
        <svg class="mx-auto h-16 w-16 text-red-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
        
        <h1 class="text-3xl font-bold text-red-400 mb-2">🚫 Acceso Denegado</h1>
        
        <p class="text-neutral-300 mb-6">
            No tienes permiso para acceder a esta página. Por favor, inicia sesión para continuar.
        </p>

        <!-- Enlace para volver al login (Color Mostaza) -->
        <a 
            href="login.php" 
            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-neutral-900 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-150 ease-in-out transform hover:scale-105 focus:ring-offset-neutral-800"
        >
            Volver a Iniciar Sesión
        </a>

    </div>

</body>
</html>