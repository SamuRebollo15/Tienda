<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Ruta para listar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    // Ruta para filtrar productos por nombre
    public function filtrarPorNombre(Request $request)
    {
        $nombre = $request->input('nombre');
        $productos = Producto::where('nombre', 'like', "%$nombre%")->get();
        return response()->json($productos);
    }

    // Ruta para filtrar productos por precio mínimo
    public function filtrarPorPrecioMin(Request $request)
    {
        $precioMin = $request->input('precio_min');
        $productos = Producto::where('precio', '>=', $precioMin)->get();
        return response()->json($productos);
    }

    // Ruta para filtrar productos por precio máximo
    public function filtrarPorPrecioMax(Request $request)
    {
        $precioMax = $request->input('precio_max');
        $productos = Producto::where('precio', '<=', $precioMax)->get();
        return response()->json($productos);
    }

    // Ruta para filtrar productos por rango de precio
    public function filtrarPorRangoPrecio(Request $request)
    {
        $precioMin = $request->input('precio_min');
        $precioMax = $request->input('precio_max');

        $query = Producto::query();

        if ($precioMin) {
            $query->where('precio', '>=', $precioMin);
        }

        if ($precioMax) {
            $query->where('precio', '<=', $precioMax);
        }

        $productos = $query->get();
        return response()->json($productos);
    }

    // Ruta para ordenar productos por precio
    public function ordenarPorPrecio(Request $request)
    {
        $ordenPrecio = $request->input('orden_precio', 'asc');
        $productos = Producto::orderBy('precio', $ordenPrecio)->get();
        return response()->json($productos);
    }

    // Ruta para filtrar por proveedor
    public function filtrarPorProveedor(Request $request)
    {
        $proveedorId = $request->input('proveedor_id');
        $productos = Producto::where('proveedor_id', $proveedorId)->get();
        return response()->json($productos);
    }
}
