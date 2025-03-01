<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Gestión de Pedidos</h1>
            <a href="" class="bg-green-500 text-white px-4 py-2 rounded text-sm">Agregar Pedido</a>
        </div>
        
        <input type="text" id="search" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="Buscar pedido...">
        
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Fecha de Compra</th>
                        <th class="p-3">Fecha de Entrega</th>
                        <th class="p-3">Usuario</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody id="pedidoTable" class="bg-white divide-y divide-gray-200">
                    @foreach($pedidos as $pedido)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3">{{ $pedido->id }}</td>
                            <td class="p-3">{{ $pedido->fecha_compra->format('d/m/Y') }}</td>
                            <td class="p-3">{{ $pedido->fecha_aproximada_entrega->format('d/m/Y') }}</td>
                            <td class="p-3">{{ $pedido->usuario->usuario ?? 'Sin usuario' }}</td>
                            <td class="p-3 flex space-x-2">
                                <a href="" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">Ver</a>
                                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="inline">
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
            let rows = document.querySelectorAll('#pedidoTable tr');
            rows.forEach(row => {
                row.style.display = row.textContent.toLowerCase().includes(value) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
