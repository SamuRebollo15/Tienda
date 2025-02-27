<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Editar Producto</h1>
        
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT') <!-- Método para indicar que se trata de una actualización -->
            
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Precio</label>
                <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            
            <div>
                <label class="block text-gray-700">Proveedor</label>
                <select name="proveedor_id" class="w-full p-2 border border-gray-300 rounded" required>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}" {{ $proveedor->id == $producto->proveedor_id ? 'selected' : '' }}>
                            {{ $proveedor->nombre_completo }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="block text-gray-700">Descuento</label>
                <select name="descuento_id" class="w-full p-2 border border-gray-300 rounded">
                    <option value="">Sin descuento</option>
                    @foreach($descuentos as $descuento)
                        <option value="{{ $descuento->id }}" {{ $descuento->id == $producto->descuento_id ? 'selected' : '' }}>
                            {{ $descuento->porcentaje }}%
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label class="block text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full p-2 border border-gray-300 rounded">{{ $producto->descripcion }}</textarea>
            </div>
            
            <div>
                <label class="block text-gray-700">Cantidad</label>
                <input type="number" name="cantidad" value="{{ $producto->cantidad }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <!-- Sección para modificar la imagen -->
            <div>
                <label class="block text-gray-700">Imagen Actual</label>
                <div class="mb-2">
                    @if($producto->imagen_producto)
                        <img src="{{ asset('imagenes/' . $producto->imagen_producto) }}" alt="Imagen actual del producto" class="w-32 h-32 object-cover rounded">
                    @else
                        <span class="text-gray-500 italic">Sin imagen</span>
                    @endif
                </div>
                
                <label class="block text-gray-700">Subir Nueva Imagen</label>
                <input type="file" name="imagen_producto" accept="image/*" class="w-full p-2 border border-gray-300 rounded">
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('productos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar Producto</button>
            </div>
        </form>
    </div>
</body>
</html>
