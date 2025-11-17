<?php
//Presentación:
//Muestra el formulario de nombre de usuario y contraseña. 
//El formulario debe enviar los datos mediante el método POST 
//a un script de procesamiento.

//Concepto PHP Clave: 
//Formularios HTML, método POST

// Tarea: Inicializa la variable $error.
// Verifica si hay un parámetro 'error' en la URL (lo enviará authenticate.php si falla).
$error = isset($_GET['error']) && $_GET['error'] == 1;

//HTML básico para el formulario de login:
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema - Proyecto PHP</title>
    <!-- Carga de Tailwind CSS para estilos modernos y responsivos -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #171717; /* Negro mate o Gris muy oscuro */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <!-- Contenedor Principal: Tarjeta de Login -->
    <div class="w-full max-w-md bg-neutral-800 rounded-xl shadow-2xl p-8 sm:p-10 border-t-4 border-amber-500">

        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-neutral-50">🔒 Acceso al Sistema</h1>
            <p class="text-neutral-400 mt-1">Introduce tus credenciales para continuar.</p>
        </header>

        <!-- Mensaje de Error Condicional (Estilo oscuro y rojo de contraste) -->
        <?php if ($error): ?>
            <div role="alert" class="p-4 mb-6 text-sm text-red-100 bg-red-800 rounded-lg border-l-4 border-red-500 transition duration-300 ease-in-out transform hover:shadow-lg">
                <span class="font-medium">Error de Autenticación:</span> Nombre de usuario o contraseña incorrectos.
            </div>
        <?php endif; ?>

        <!-- Formulario de Login -->
        <form action="authenticate.php" method="POST" class="space-y-6">

            <!-- Campo de Usuario -->
            <div>
                <label for="username" class="block text-sm font-medium text-neutral-300 mb-1">Nombre de Usuario</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    class="w-full px-4 py-2 border border-neutral-600 rounded-lg shadow-sm focus:ring-amber-500 focus:border-amber-500 transition duration-150 bg-neutral-900 text-neutral-200"
                    placeholder="ej. admin"
                    autocomplete="username"
                >
            </div>

            <!-- Campo de Contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-neutral-300 mb-1">Contraseña</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="w-full px-4 py-2 border border-neutral-600 rounded-lg shadow-sm focus:ring-amber-500 focus:border-amber-500 transition duration-150 bg-neutral-900 text-neutral-200"
                    placeholder="••••••••"
                    autocomplete="current-password"
                >
            </div>

            <!-- Botón de Enviar (Color Mostaza) -->
            <div>
                <button 
                    type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-semibold text-neutral-900 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition duration-200 ease-in-out transform hover:scale-[1.01] active:scale-[0.99] focus:ring-offset-neutral-800"
                >
                    Iniciar Sesión
                </button>
            </div>
        </form>

        <footer class="text-center mt-6 text-neutral-500 text-sm">
            Sistema de Autenticación PHP Básico
        </footer>
    </div>

</body>
</html>
