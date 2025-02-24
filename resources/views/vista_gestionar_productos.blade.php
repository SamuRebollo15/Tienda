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
        
        <input type="text" id="search" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="Buscar producto...">
        
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3">Proveedor</th>
                        <th class="p-3">Descuento</th>
                        <th class="p-3">Descripción</th>
                        <th class="p-3">Cantidad</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody id="productTable" class="bg-white divide-y divide-gray-200">
                    @foreach($productos as $producto)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3">{{ $producto->id }}</td>
                            <td class="p-3">{{ $producto->nombre }}</td>
                            <td class="p-3">{{ $producto->precio }}</td>
                            <td class="p-3">{{ $producto->proveedor_id }}</td>
                            <td class="p-3">{{ $producto->descuento_id }}</td>
                            <td class="p-3">{{ $producto->descripcion }}</td>
                            <td class="p-3">{{ $producto->cantidad }}</td>
                            <td class="p-3 flex space-x-2">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">Editar</a>

                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            let value = this.value.toLowerCase();
            let rows = document.querySelectorAll('#productTable tr');
            rows.forEach(row => {
                row.style.display = row.textContent.toLowerCase().includes(value) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
