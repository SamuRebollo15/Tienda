<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    // Listar todos los descuentos
    public function index()
    {
        $proveedores =  Proveedor::all();
        return view('vista_gestionar_proveedores', ['proveedores' => $proveedores] );
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id); // Busca el producto por ID

        $proveedor->delete(); // Elimina el producto

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }
 
    public function crearProveedorVista()
    {
        
        return view('vista_crear_provedores');
    }
   

    public function store(Request $request)
    {
        // Validación de datos
        $validated = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
            'telefono' => 'nullable|string|max:15',
        ]);

        // Crear proveedor
        $proveedor = Proveedor::create($validated);

        return response()->json([
            'message' => 'Proveedor creado con éxito',
            'proveedor' => $proveedor
        ], 201);
    }

}
