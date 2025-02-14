<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Deshabilitar comprobación de claves foráneas temporalmente
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Insertar los datos de los usuarios
        DB::table('usuarios')->insert([
            [
                'usuario' => 'juanperez',
                'contraseña' => Hash::make('password123'), // Contraseña cifrada
                'rol' => 'admin',
                'nombre_completo' => 'Juan Pérez',
                'direccion_id' => 1, // Asegúrate de tener direcciones creadas previamente
                'imagen_usuario' => 'juan.jpg',
            ],
            [
                'usuario' => 'mariagonzalez',
                'contraseña' => Hash::make('password456'),
                'rol' => 'usuario',
                'nombre_completo' => 'María González',
                'direccion_id' => 2,
                'imagen_usuario' => 'maria.jpg',
            ],
            [
                'usuario' => 'luislopez',
                'contraseña' => Hash::make('password789'),
                'rol' => 'usuario',
                'nombre_completo' => 'Luis López',
                'direccion_id' => 3,
                'imagen_usuario' => 'luis.jpg',
            ],
        ]);
        
        // Volver a habilitar las comprobaciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
