<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Pedido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <div class="container mx-auto max-w-4xl p-6 bg-white shadow-[0_5px_20px_rgba(0,0,0,0.4)] rounded-lg mt-12">


        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">
            🛒 Detalle del Pedido #{{ $pedido->id }}
        </h1>

        <div class="bg-blue-100 p-4 rounded-lg shadow-md mb-6 border border-blue-300">
            <p class="text-lg"><strong>📅 Fecha de Compra:</strong> {{ \Carbon\Carbon::parse($pedido->fecha_compra)->format('d/m/Y H:i') }}</p>
            <p class="text-lg"><strong>🚚 Estado:</strong> 
                <span class="uppercase text-blue-800 font-semibold bg-blue-200 px-2 py-1 rounded">
                    {{ ucfirst($pedido->estado) }}
                </span>
            </p>
        </div>

        <h2 class="text-2xl font-semibold text-blue-800 mb-4">🛍 Productos</h2>

        <div class="overflow-hidden rounded-lg shadow-md">
            <table class="w-full bg-white border border-gray-300">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-3 border">Producto</th>
                        <th class="p-3 border text-center">Cantidad</th>
                        <th class="p-3 border text-center">Precio Unitario</th>
                        <th class="p-3 border text-center">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalPedido = 0; @endphp
                    @foreach($lineas as $linea)
                        @php
                            $subtotal = $linea->cantidad * $linea->producto->precio;
                            $totalPedido += $subtotal;
                        @endphp
                        <tr class="border-b hover:bg-blue-50 transition">
                            <td class="p-3 border">{{ $linea->producto->nombre }}</td>
                            <td class="p-3 border text-center">{{ $linea->cantidad }}</td>
                            <td class="p-3 border text-center font-medium text-blue-700">{{ number_format($linea->producto->precio, 2) }}€</td>
                            <td class="p-3 border text-center font-semibold text-green-600">{{ number_format($subtotal, 2) }}€</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="bg-blue-200 font-bold text-blue-900">
                        <td colspan="3" class="p-3 border text-right">Total:</td>
                        <td class="p-3 border text-center text-green-700 text-xl">{{ number_format($totalPedido, 2) }}€</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('pedidos.index') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow-md transition duration-300">
                🔙 Volver
            </a>
        </div>
    </div>
</body>
</html>
