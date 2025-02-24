<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Descuento;

class DescuentoController extends Controller
{
    // Listar todos los descuentos
    public function index()
    {
        $descuentos = Descuento::all();
        return view('vista_gestionar_descuentos', ['descuentos' => $descuentos] );
    }

    public function create()
    {
        return view('vista_crear_descuento');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'porcentaje' => 'required|numeric|min:0|max:100',
            'fecha_finalizacion' => 'required|date',
            'descripcion' => 'nullable|string',
        ]);
    
        try {
            $descuento = Descuento::create($request->only(['nombre', 'porcentaje', 'fecha_finalizacion', 'descripcion']));
            return redirect()->route('descuentos.index')->with('success', 'Descuento creado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->route('descuentos.index')->with('error', 'Error al crear el descuento: ' . $e->getMessage());
        }
    }
    
}
