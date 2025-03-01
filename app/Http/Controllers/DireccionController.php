<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;

class DireccionController extends Controller
{
    // Listar todos los descuentos
    public function index()
    {
        $direcciones =  Direccion::all();
        return view('vista_gestionar_direcciones', ['direcciones' => $direcciones] );
    }


    public function destroy($id)
    {
        $direccion = Direccion::findOrFail($id); // Busca el producto por ID
        $direccion->delete(); // Elimina el producto

        return redirect()->route('direcciones.index')->with('success', 'Direccion eliminada correctamente.');
    }
   
}
