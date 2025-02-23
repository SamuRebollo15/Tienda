<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Crear Nuevo Producto</h1>
        
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Precio</label>
                <input type="number" name="precio" step="0.01" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Proveedor</label>
                <select name="proveedor_id" class="w-full p-2 border border-gray-300 rounded" required>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_completo }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="block text-gray-700">Descuento</label>
                <select name="descuento_id" class="w-full p-2 border border-gray-300 rounded">
                    <option value="">Sin descuento</option>
                    @foreach($descuentos as $descuento)
                        <option value="{{ $descuento->id }}">{{ $descuento->porcentaje }}%</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="block text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded"></textarea>
            </div>
            
            <div>
                <label class="block text-gray-700">Cantidad</label>
                <input type="number" name="cantidad" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div class="flex justify-between">
                <a href="" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Guardar Producto</button>
            </div>
        </form>
    </div>
</body>
</html>
