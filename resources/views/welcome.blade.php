<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Agregamos un estilo personalizado para el efecto de hover */
        .producto:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
            z-index: 10;
            /* Asegura que el producto sobresalga por encima de los demás */
        }

        .producto {
            position: relative;
            overflow: hidden;
        }

        .producto:hover .overlay {
            opacity: 0.5;
        }

        .producto:hover .botones {
            opacity: 1;
            transform: translateY(0);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .botones {
            position: absolute;
            bottom: 10px;
            left: 50%;

            transform: translate(-50%, 100%);
            display: flex;
            gap: 10px;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    </style>
</head>

<body>
    @auth
    <h1>Estas logueado</h1>
    <!-- Barra de navegación -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center relative">
        <h1 class="text-2xl font-bold">Tienda Laravel</h1>
        <div class="flex items-center space-x-4 relative -left-[100px]">
            <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="Usuario" class="w-8 h-8 rounded-full">
            <span class="font-semibold">Samuel</span>
            <div class="relative inline-block text-left">
                <button id="dropdownButton" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
                    <span class="mr-2">Menú</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div id="dropdownMenu" class="hidden absolute mt-2 w-40 bg-white border border-gray-300 rounded shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Perfil</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Pedidos</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Cerrar sesión</a>
                </div>
            </div>

        </div>
    </nav>


    <!-- Contenedor de Productos -->
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-center mb-8">Productos Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Producto 1 -->
            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202409/26/00118007000906____3__600x600.jpg" alt="Producto 1" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 1</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>

                </div>
            </div>
            <!-- Más productos aquí -->
            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://media.adeo.com/media/3573343/media.jpg?width=3000&height=3000&format=jpg&quality=80&fit=bounds" alt="Producto 2" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 2</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://deepgaming.es/wp-content/uploads/2022/11/DG-TEC65-RGB-deepgaming-teclados-ratones-teclado-mini-tm065-04-2.jpg" alt="Producto 3" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 3</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.mercado47.com/Files/Images/References/2020/09/1fedfe2c-f062-4a36-bec9-f8ed4a9a2a1b/7a4add13-13e3-4dac-812f-fdb2a4909d31.png" alt="Producto 4" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 4</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://naisa.es/11236-large_default/camiseta-basica-algodon-atomic-.jpg" alt="Producto 5" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 5</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.delauz.es/documents/10180/12111/8700216266185_G.jpg" alt="Producto 6" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 6</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://puntosalao.com/wp-content/uploads/2023/04/EV-99-Negro_0.jpg" alt="Producto 7" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 7</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.clubgeronimostilton.es/ficheros/libros/El_gran_regreso_ok.png" alt="Producto 8" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 8</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>
                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 mr-3">Añadir al carrito</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!document.getElementById('dropdownButton').contains(event.target)) {
                document.getElementById('dropdownMenu').classList.add('hidden');
            }
        });
    </script>

    @endauth

    @guest
    <h1>Esto es no loggeado </h1>
    <!-- Barra de navegación -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Tienda Laravel</h1>
        <div>

            <button id="botonLogin" href="/login" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Iniciar sesión</button>

            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Registrarse</button>
        </div>
    </nav>

    <!-- Contenedor de Productos -->
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-center mb-8">Productos Destacados</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Producto 1 -->
            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202409/26/00118007000906____3__600x600.jpg" alt="Producto 1" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 1</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>
            <!-- Más productos aquí -->
            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://media.adeo.com/media/3573343/media.jpg?width=3000&height=3000&format=jpg&quality=80&fit=bounds" alt="Producto 2" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 2</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://deepgaming.es/wp-content/uploads/2022/11/DG-TEC65-RGB-deepgaming-teclados-ratones-teclado-mini-tm065-04-2.jpg" alt="Producto 3" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 3</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.mercado47.com/Files/Images/References/2020/09/1fedfe2c-f062-4a36-bec9-f8ed4a9a2a1b/7a4add13-13e3-4dac-812f-fdb2a4909d31.png" alt="Producto 4" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 4</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://naisa.es/11236-large_default/camiseta-basica-algodon-atomic-.jpg" alt="Producto 5" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 5</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.delauz.es/documents/10180/12111/8700216266185_G.jpg" alt="Producto 6" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 6</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://puntosalao.com/wp-content/uploads/2023/04/EV-99-Negro_0.jpg" alt="Producto 7" class="h-64 w-full object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 7</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>

            <div class="producto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="overlay"></div>
                <img src="https://www.clubgeronimostilton.es/ficheros/libros/El_gran_regreso_ok.png" alt="Producto 8" class="h-64  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Producto 8</h3>
                    <p class="text-gray-700 mt-2">$ 199.99</p>
                </div>
                <div class="botones">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Info</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginButton = document.getElementById('botonLogin');
            if (loginButton) {
                loginButton.addEventListener('click', function() {
                    // Obtener la URL actual
                    const currentUrl = window.location.href;

                    // Redirigir al login con el parámetro 'redirect'
                    window.location.href = "{{ route('login') }}?redirect=" + encodeURIComponent(currentUrl);
                });
            }


        });
    </script>
    @endguest

</body>

</html>