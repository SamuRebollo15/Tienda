<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="absolute top-4 left-4">
        <a href="{{ url('/') }}" class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-orange-600">
            ← Volver al Inicio
        </a>
    </div>
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">📦 Pedidos</h1>

   <!-- Pedido en curso -->
<div class="bg-white shadow-lg rounded-lg p-6 mb-6">
    <h2 class="text-xl font-semibold mb-4">🛒 Pedido en curso</h2>

    @if(session()->has('pedido') && !empty(session('pedido')))
        <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
            <p class="font-medium mb-2">Detalles del pedido:</p>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Producto</th>
                        <th class="p-2 border">Cantidad</th>
                        <th class="p-2 border">Precio Unidad</th>
                        <th class="p-2 border">Precio Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPedido = 0;
                    @endphp
                    @foreach(session('pedido') as $producto)
                        @php
                            $precioTotal = $producto['cantidad'] * $producto['precio'];
                            $totalPedido += $precioTotal;
                        @endphp
                        <tr>
                            <td class="p-2 border">{{ $producto['nombre'] }}</td>
                            <td class="p-2 border text-center">{{ $producto['cantidad'] }}</td>
                            <td class="p-2 border text-center">{{ number_format($producto['precio'], 2) }}€</td>
                            <td class="p-2 border text-center font-semibold">{{ number_format($precioTotal, 2) }}€</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Total del pedido -->
            <div class="mt-4 text-right font-semibold text-lg">
                Total: {{ number_format($totalPedido, 2) }}€
            </div>

            <!-- Botón para completar el pedido -->
            <form action="{{ route('crear.pedido') }}" method="GET" class="mt-4">
                @csrf
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">
                    ✅ Completar Pedido
                </button>
            </form>
        </div>
    @else
        <p class="text-gray-500">No tienes ningún pedido en curso.</p>
    @endif
</div>

    

    <!-- Lista de pedidos -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">📋 Lista de pedidos</h2>

        <button id="togglePedidos" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-4 transition">
            🔍 Ver pedidos anteriores
        </button>

        <div id="pedidosContainer" class="hidden">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Fecha de compra</th>
                        <th class="border p-2">Fecha de llegada</th>
                        <th class="border p-2">Estado</th>
                        <th class="border p-2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pedidos as $pedido)
                        @php
                            $estado = now()->greaterThan($pedido->fecha_aproximada_entrega) ? 'Recibido' : 'Enviado';
                            $estadoClase = $estado === 'Recibido' ? 'bg-green-500' : 'bg-blue-500';
                        @endphp
                        <tr class="odd:bg-gray-50 even:bg-white">
                            <td class="border p-2 text-center">{{ $pedido->id }}</td>
                            <td class="border p-2 text-center">{{ $pedido->created_at->format('d/m/Y') }}</td>
                            <td class="border p-2 text-center">
                                {{ optional($pedido->fecha_aproximada_entrega)->format('d/m/Y') ?? 'Sin fecha' }}
                            </td>
                            <td class="border p-2 text-center">
                                <span class="px-2 py-1 text-white text-sm rounded {{ $estadoClase }}">
                                    {{ $estado }}
                                </span>
                            </td>
                            <td class="border p-2 text-center">
                                <a href="" 
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition">
                                    👀 Ver Pedido
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border p-4 text-center text-gray-500">No tienes pedidos anteriores.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        
        
        
    </div>
</div>

<script>
    document.getElementById('togglePedidos').addEventListener('click', function () {
        document.getElementById('pedidosContainer').classList.toggle('hidden');
    });
</script>

</body>
</html>
