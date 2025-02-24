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

   
}
