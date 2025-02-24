<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\DireccionController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boton', function () {
    return view('pruebaboton');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/hola', function () {
    return 'Hola, ' . auth()->user()->email;
})->middleware('auth');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::get('/crearProducto', [ProductoController::class, 'crearProductoVista']) ->name('productos.create');

Route::get('/descuentos', [DescuentoController::class, 'index'])->name('descuentos.index');
Route::get('/crearDescuentos', [DescuentoController::class, 'create'])->name('descuentos.create');      
Route::post('/descuentos', [DescuentoController::class, 'store'])->name('descuentos.store');
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index'); 

Route::get('/direcciones', [DireccionController::class, 'index'])->name('direcciones.index'); 



Route::get('/logout', function () {
   



    // Desloguear al usuario
    Auth::logout();


    return "Fuiste deslogueado";
})->middleware('auth')->name('logout');


Route::get('/prueba', function () {
   
    return view('ejemplo');
})->name('prueba');

Route::get('/productos/filtrar/nombre', [ProductoController::class, 'filtrarPorNombre']); // Filtrar por nombre
Route::get('/productos/filtrar/precio-min', [ProductoController::class, 'filtrarPorPrecioMin']); // Filtrar por precio mínimo
Route::get('/productos/filtrar/precio-max', [ProductoController::class, 'filtrarPorPrecioMax']); // Filtrar por precio máximo
Route::get('/productos/filtrar/rango-precio', [ProductoController::class, 'filtrarPorRangoPrecio']); // Filtrar por rango de precio
Route::get('/productos/ordenar/precio', [ProductoController::class, 'ordenarPorPrecio']); // Ordenar por precio
Route::get('/productos/filtrar/proveedor', [ProductoController::class, 'filtrarPorProveedor']); // Filtrar por proveedor
