<?php
//Area protegida:
//Muestra el contenido personalizado solo si el usuario 
//está autenticado. Si no lo está, redirige al usuario a la 
//pantalla de "No tienes permisos".

//Concepto PHP Clave: 
//Sesiones session_start(), ($_SESSION), header() para 
//redirección, date()/time() para mostrar la hora de login.

//Incluyo Configuración: Esto inicia la sesión (session_start()).
require_once 'config.php';

//Verificación de autenticación:
    if (!isset($_SESSION['username'])) {
    // Redirigir a la página de "Sin Permisos"
    header("Location: sin_permisos.php");
    exit(); // Detener la ejecución del script
}

//Declaración de variables que usaremos:
$nombre_usuario = $_SESSION['username'];
$hora_login = $_SESSION['login_time'];
$fecha_actual = date("d/m/Y");
?>
<!--HTML de la página -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?></title>
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

    <!-- Tarjeta de Bienvenida -->
    <div class="w-full max-w-lg bg-neutral-800 rounded-2xl shadow-2xl p-8 sm:p-10 border-t-4 border-amber-500">

        <header class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-amber-500">¡Bienvenido al Área Segura!</h1>
        </header>

        <!-- Contenido Personalizado -->
        <div class="space-y-6 text-neutral-300">
            
            <!-- Mensaje de Bienvenida -->
            <div class="p-4 bg-neutral-900 rounded-lg border border-amber-700">
                <p class="text-xl font-semibold text-neutral-50">Hola, <?php echo htmlspecialchars(ucfirst($nombre_usuario)); ?>!</p>
                <p class="mt-1 text-neutral-300">
                    Tu acceso ha sido verificado con éxito. Este es tu panel privado.
                </p>
            </div>

            <!-- Datos Adicionales (Hora y Fecha) -->
            <div class="flex flex-col sm:flex-row justify-between text-base">
                <div class="bg-neutral-900 p-3 rounded-lg flex items-center mb-3 sm:mb-0">
                    <svg class="w-5 h-5 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l3 3a1 1 0 001.414-1.414L11 9.586V6z" clip-rule="evenodd"></path></svg>
                    <span class="font-medium text-neutral-50 mr-1">Hora de Acceso:</span> <?php echo $hora_login; ?>
                </div>
                <div class="bg-neutral-900 p-3 rounded-lg flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"></path></svg>
                    <span class="font-medium text-neutral-50 mr-1">Fecha Actual:</span> <?php echo $fecha_actual; ?>
                </div>
            </div>
            
        </div>

        <!-- Funcionalidad para Cerrar Sesión (Mostaza) -->
        <div class="mt-8 pt-6 border-t border-neutral-700 text-center">
            <a 
                href="logout.php" 
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-neutral-900 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-150 ease-in-out transform hover:scale-105 focus:ring-offset-neutral-800"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Cerrar Sesión
            </a>
        </div>

    </div>

</body>
</html>