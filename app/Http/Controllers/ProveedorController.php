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

   
}
