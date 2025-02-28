<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proveedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Crear Nuevo Proveedor</h1>
        
        <form action="{{ route('proveedores.store')}}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Nombre Completo</label>
                <input type="text" name="nombre_completo" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block text-gray-700">Teléfono</label>
                <input type="text" name="telefono" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div>
                <label class="block text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div>
                <label class="block text-gray-700">Dirección</label>
                <textarea name="direccion" class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('proveedores.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Guardar Proveedor</button>
            </div>
        </form>
    </div>
</body>
</html>
