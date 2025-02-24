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

   
}
