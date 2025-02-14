<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedores')->insert([
            [
                'nombre_completo' => 'Proveedor A',
                'descripcion' => 'Proveedor de productos electrónicos',
                'direccion' => 'Calle Ficticia 123, Ciudad Ficticia',
                'telefono' => '123456789',
            ],
            [
                'nombre_completo' => 'Proveedor B',
                'descripcion' => 'Proveedor de suministros de oficina',
                'direccion' => 'Avenida Ejemplo 456, Ciudad Ejemplo',
                'telefono' => '987654321',
            ],
            [
                'nombre_completo' => 'Proveedor C',
                'descripcion' => 'Proveedor de productos alimenticios',
                'direccion' => 'Calle Comida 789, Ciudad Sabor',
                'telefono' => '555123456',
            ],
        ]);
    }
}
