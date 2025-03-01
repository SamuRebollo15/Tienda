<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dirección</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Editar Dirección</h1>
        
        <form action="{{ route('direcciones.update', $direccion->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700">País</label>
                <input type="text" name="pais" value="{{ $direccion->pais }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block text-gray-700">Provincia</label>
                <input type="text" name="provincia" value="{{ $direccion->provincia }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

          

            <div>
                <label class="block text-gray-700">Calle</label>
                <input type="text" name="calle" value="{{ $direccion->calle }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block text-gray-700">Código Postal</label>
                <input type="text" name="codigo_postal" value="{{ $direccion->codigo_postal }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('direcciones.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar Dirección</button>
            </div>
        </form>
    </div>
</body>
</html>
