<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Descuento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Editar Descuento</h1>
        
        <form action="{{ route('descuentos.update', $descuento->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT') <!-- Método para indicar que se trata de una actualización -->
            
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" value="{{ $descuento->nombre }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Porcentaje</label>
                <input type="number" name="porcentaje" value="{{ $descuento->porcentaje }}" step="0.01" class="w-full p-2 border border-gray-300 rounded" required min="0" max="100">
            </div>
            
            <div>
                <label class="block text-gray-700">Fecha de Finalización</label>
                <input type="date" name="fecha_finalizacion" value="{{ $descuento->fecha_finalizacion }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded">{{ $descuento->descripcion }}</textarea>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('descuentos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar Descuento</button>
            </div>
        </form>
    </div>
</body>
</html>
