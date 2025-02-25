<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'usuario' => 'juanperez',
            'email' => 'juan@example.com',
            'password' => 'password123', // Laravel lo hasheará automáticamente
            'rol' => 'admin',
            'nombre_completo' => 'Juan Pérez',
            'direccion_id' => 1,
            'imagen_usuario' => 'imagenes/fotoUsuario1.jpg',
        ]);
        Usuario::create([
            'usuario' => 'mariagonzalez',
            'email' => 'maria@example.com',
            'password' => 'password456',
            'rol' => 'usuario',
            'nombre_completo' => 'María González',
            'direccion_id' => 2,
            'imagen_usuario' => 'maria.jpg',
        ]);

        Usuario::create([
            'usuario' => 'luislopez',
            'email' => 'luis@example.com',
            'password' => 'password789',
            'rol' => 'usuario',
            'nombre_completo' => 'Luis López',
            'direccion_id' => 3,
            'imagen_usuario' => 'luis.jpg',
        ]);
    }
}
