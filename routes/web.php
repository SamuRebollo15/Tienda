<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/gestion', function () {
    return view('vista_gestionar_productos', ['productos' => App\Models\Producto::all()]);
})->middleware('auth');
Route::get('/gestion2', function () {
    return view('vista_gestionar_proveedores', ['proveedores' => App\Models\Proveedor::all()]);
})->middleware('auth');
Route::get('/gestion3', function () {
    return view('vista_gestionar_direcciones', ['direcciones' => App\Models\Direccion::all()]);
})->middleware('auth');
Route::get('/gestion4', function () {
    return view('vista_gestionar_descuentos', ['descuentos' => App\Models\Descuento::all()]);
})->middleware('auth');

Route::get('/logout', function () {
   

    // Desloguear al usuario
    Auth::logout();


    return "Fuiste deslogueado";
})->middleware('auth')->name('logout');


Route::get('/prueba', function () {
   
    return view('ejemplo');
})->name('prueba');

Route::get('/productos', [ProductoController::class, 'index']); // Listar todos los productos
Route::get('/productos/filtrar/nombre', [ProductoController::class, 'filtrarPorNombre']); // Filtrar por nombre
Route::get('/productos/filtrar/precio-min', [ProductoController::class, 'filtrarPorPrecioMin']); // Filtrar por precio mínimo
Route::get('/productos/filtrar/precio-max', [ProductoController::class, 'filtrarPorPrecioMax']); // Filtrar por precio máximo
Route::get('/productos/filtrar/rango-precio', [ProductoController::class, 'filtrarPorRangoPrecio']); // Filtrar por rango de precio
Route::get('/productos/ordenar/precio', [ProductoController::class, 'ordenarPorPrecio']); // Ordenar por precio
Route::get('/productos/filtrar/proveedor', [ProductoController::class, 'filtrarPorProveedor']); // Filtrar por proveedor
