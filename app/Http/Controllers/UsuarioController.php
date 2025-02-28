<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    
    public function subirImagen(Request $request)
    {
        $request->validate([
            'imagen_usuario' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener el usuario autenticado
        $usuario = auth()->user();
  

        $imagen = $request->file('imagen_usuario');
        $nombreArchivo = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME); // Nombre sin extensión
        $extension = $imagen->getClientOriginalExtension(); // Extensión original
        
        // Verificamos si el archivo ya existe y generamos un nuevo nombre si es necesario
        while (Storage::disk('public')->exists("{$nombreArchivo}.{$extension}")) {
            // Generamos un carácter aleatorio
            $caracterAleatorio = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 1);
            
            // Añadimos el carácter aleatorio al nombre del archivo
            $nombreArchivo = $nombreArchivo . $caracterAleatorio;
        }

        $ruta = $imagen->storeAs("", "{$nombreArchivo}.{$extension}", "public");
      
        $usuario->imagen_usuario = "{$nombreArchivo}.{$extension}";
        $usuario->save(); 

        return back()->with('success', 'Imagen subida correctamente.');
    }


    public function quitarImagen()
    {
      
        // Obtener el usuario autenticado
        $usuario = auth()->user();
  

        
        
      
        $usuario->imagen_usuario = null;

        $usuario->save(); 

        return back()->with('success', 'Imagen eliminada correctamente.');
    }


    public function admin()
    {
        return view('administracion'); 
    }
}
