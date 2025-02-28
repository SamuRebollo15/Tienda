<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Gestión de Productos</h1>
            <a href="/crearProducto" class="bg-green-500 text-white px-4 py-2 rounded text-sm">Agregar Producto</a>
        </div>

        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
    
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contenedor de los tres buscadores -->
        <div class="flex space-x-4 mb-4">
            <!-- Buscar por nombre -->
            <input type="text" id="searchName" class="w-1/3 p-2 border border-gray-300 rounded" placeholder="Buscar por nombre...">
            
            <!-- Buscar por precio -->
            <input type="number" id="searchPrice" class="w-1/3 p-2 border border-gray-300 rounded" placeholder="Mostrar productos hasta precio...">

            <!-- Buscar por cantidad -->
            <input type="number" id="searchQuantity" class="w-1/3 p-2 border border-gray-300 rounded" placeholder="Mostrar productos hasta cantidad...">
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Imagen</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3">Proveedor</th>
                        <th class="p-3">Descuento</th>
                        <th class="p-3">Descripción</th>
                        <th class="p-3">Cantidad</th>
                        <th class="p-3">Disponible</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody id="productTable" class="bg-white divide-y divide-gray-200">
                    @foreach($productos as $producto)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3">{{ $producto->id }}</td>
                            <td class="p-3 text-center">
                                @if($producto->imagen_producto)
                                    <img src="{{ asset('imagenes/' . $producto->imagen_producto) }}" alt="Imagen del producto" class="w-16 h-16 object-cover rounded">
                                @else
                                    <span class="text-gray-500 italic">Sin imagen</span>
                                @endif
                            </td>
                            <td class="p-3 nombre">{{ $producto->nombre }}</td>
                            <td class="p-3 precio">{{ $producto->precio }}</td>
                            <td class="p-3 {{ $producto->proveedor ? '' : 'text-red-500 font-semibold' }}">
                                {{ $producto->proveedor->nombre_completo ?? 'Sin proveedor' }}
                            </td>

                        
                            <td class="p-3">
                                {{ $producto->descuento->porcentaje ?? 'Sin descuento' }}%
                            </td>
                            <td class="p-3">{{ $producto->descripcion }}</td>
                            <td class="p-3 cantidad">{{ $producto->cantidad }}</td>
                            <td>
                                @if(is_null($producto->proveedor_id))
                                <span class="text-red-500 font-semibold">No disponible</span>
                                @else
                                
                                    <span class="text-green-500 font-semibold">Disponible</span>
                                @endif
                            </td>
                            <td class="p-3 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">Editar</a>

                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                                </form>
                            </div>
                        </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchNameInput = document.getElementById('searchName');
            const searchPriceInput = document.getElementById('searchPrice');
            const searchQuantityInput = document.getElementById('searchQuantity');
            const rows = document.querySelectorAll('#productTable tr');

            function filtrarProductos() {
                let searchName = searchNameInput.value.toLowerCase();
                let maxPrice = parseFloat(searchPriceInput.value) || Infinity;
                let maxQuantity = parseFloat(searchQuantityInput.value) || Infinity;

                rows.forEach(row => {
                    let productName = row.querySelector('.nombre').textContent.toLowerCase();
                    let productPrice = parseFloat(row.querySelector('.precio').textContent) || 0;
                    let productQuantity = parseFloat(row.querySelector('.cantidad').textContent) || 0;

                    let matchesName = productName.includes(searchName);
                    let matchesPrice = productPrice <= maxPrice;
                    let matchesQuantity = productQuantity <= maxQuantity;

                    row.style.display = (matchesName && matchesPrice && matchesQuantity) ? '' : 'none';
                });
            }

            searchNameInput.addEventListener('keyup', filtrarProductos);
            searchPriceInput.addEventListener('input', filtrarProductos);
            searchQuantityInput.addEventListener('input', filtrarProductos);
        });
    </script>
</body>
</html>
