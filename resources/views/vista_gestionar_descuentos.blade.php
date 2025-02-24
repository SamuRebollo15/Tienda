<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Descuentos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Gestión de Descuentos</h1>
            <a href="{{ route('descuentos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded text-sm">Agregar Descuento</a>
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

        <input type="text" id="search" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="Buscar descuento...">

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 shadow-md">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="p-3 border">ID</th>
                        <th class="p-3 border">Nombre</th>
                        <th class="p-3 border">Porcentaje</th>
                        <th class="p-3 border">Fecha de Finalización</th>
                        <th class="p-3 border">Descripción</th>
                        <th class="p-3 border">Acciones</th>
                    </tr>
                </thead>
                <tbody id="descuentoTable">
                    @foreach($descuentos as $descuento)
                        <tr class="text-gray-700 bg-white hover:bg-gray-100">
                            <td class="p-3 border">{{ $descuento->id }}</td>
                            <td class="p-3 border">{{ $descuento->nombre }}</td>
                            <td class="p-3 border">{{ $descuento->porcentaje }}%</td>
                            <td class="p-3 border">{{ $descuento->fecha_finalizacion }}</td>
                            <td class="p-3 border">{{ $descuento->descripcion }}</td>
                            <td class="p-3 border flex gap-2">
                                <a href="" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">Editar</a>
                                <form action="" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este descuento?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm">Eliminar</button>
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
            let rows = document.querySelectorAll('#descuentoTable tr');
            rows.forEach(row => {
                row.style.display = row.textContent.toLowerCase().includes(value) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
