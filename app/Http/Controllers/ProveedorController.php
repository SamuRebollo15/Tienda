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
   
}
