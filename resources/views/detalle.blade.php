<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Imagen del producto -->
            <div class="flex justify-center">
                <img src="https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202409/26/00118007000906____3__600x600.jpg" alt="Producto" class="rounded-lg shadow-md w-full">
            </div>

            <!-- Información del producto -->
            <div class="flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Nombre del Producto</h1>
                    <p class="text-gray-600 text-sm mt-1">Proveedor: <span class="font-medium">Proveedor XYZ</span></p>
                    <p class="text-xl font-semibold text-green-600 mt-4">$199.99</p>
                    <p class="text-gray-700 mt-4">
                        Este es un producto de alta calidad con características impresionantes.
                        Perfecto para cualquier ocasión y disponible a un precio accesible.
                    </p>
                </div>

                <!-- Selector de cantidad y botón de compra -->
                <div class="mt-6">
                    <label for="cantidad" class="text-gray-700 font-medium">Cantidad:</label>
                    <div class="flex items-center space-x-2 mt-2">
                        <input type="number" id="cantidad" min="1" value="1"
                            class="w-16 border border-gray-300 p-2 rounded-lg text-center text-gray-900">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <!-- Botón de volver -->
                <div class="mt-6">
                    <a href="/" class="text-blue-500 hover:underline flex items-center">
                        ← Volver a la tienda
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
