<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Descuento;
use App\Models\Pedido;
use Illuminate\Http\Request;


class PedidoController extends Controller
{
   

   public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos', ['pedidos' => $pedidos]); // Corrige el cierre de la función
    }
    

    public function añadirProductoPedidoActual(Request $request)
{
    $request->validate([
        'producto_id' => 'required|integer|exists:productos,id',
        'cantidad' => 'required|integer|min:1'
    ]);

    // Obtener el usuario autenticado
    $usuarioId = auth()->id(); 

    // Obtener el producto de la base de datos
    $producto = Producto::find($request->producto_id);

    // Si no existe la sesión 'pedido', la inicializa como un array vacío
    if (!session()->has('pedido')) {
        session(['pedido' => []]);
    }

    // Obtener el pedido actual desde la sesión
    $pedido = session('pedido');

    // Agregar el nuevo producto al pedido con su precio
    $pedido[] = [
        'producto_id' => $producto->id,
        'nombre' => $producto->nombre,
        'usuario_id' => $usuarioId,
        'cantidad' => $request->cantidad,
        'precio' => $producto->precio, // Agregar el precio del producto
    ];

    // Guardar el pedido actualizado en la sesión
    session(['pedido' => $pedido]);

    return back()->with('success', 'Producto añadido al pedido actual.');
}


public function crearPedido()
{
    // Verificar si hay un pedido en la sesión
    if (!session()->has('pedido') || empty(session('pedido'))) {
        return back()->with('error', 'No hay ningún pedido en curso.');
    }

   
    // Eliminar la variable de sesión 'pedido'
    session()->forget('pedido');

    return back()->with('success', 'Pedido creado con éxito.');
}




}
