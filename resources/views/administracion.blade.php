<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tienda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center">

    <div class="absolute top-4 left-4">
        <a href="{{ url('/') }}" class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-orange-600">
            ← Volver al Inicio
        </a>
    </div>

    <div class="container mx-auto mt-8 p-8 max-w-4xl bg-white shadow-xl rounded-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Gestión de Tienda</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Gestión de Productos</span>
            </a>

            <a href="#" class="bg-green-500 hover:bg-green-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Gestión de Pedidos</span>
            </a>

            <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Gestión de Usuarios</span>
            </a>

            <a href="#" class="bg-red-500 hover:bg-red-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Reportes y Estadísticas</span>
            </a>

            <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Configuración</span>
            </a>

            <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white p-6 rounded-lg shadow-md hover:shadow-lg flex items-center justify-center transition">
                <span class="text-lg font-semibold">Soporte</span>
            </a>
        </div>
    </div>

</body>
</html>
