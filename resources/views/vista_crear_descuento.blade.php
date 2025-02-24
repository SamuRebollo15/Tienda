<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Descuento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Crear Nuevo Descuento</h1>
        
        <form action="{{ route('descuentos.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Porcentaje</label>
                <input type="number" name="porcentaje" step="0.01" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block text-gray-700">Fecha de Finalización</label>
                <input type="date" name="fecha_finalizacion" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('descuentos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Guardar Descuento</button>
            </div>
        </form>
    </div>
</body>
</html>
