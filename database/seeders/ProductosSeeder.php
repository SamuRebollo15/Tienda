<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('productos')->insert([
            [
                'nombre' => 'Laptop HP',
                'precio' => 1200.00,
                'proveedor_id' => 1,  // Asegúrate de que el proveedor con ID 1 exista
                'descuento_id' => 1,  // Asegúrate de que el descuento con ID 1 exista
                'descripcion' => 'Laptop HP con procesador Intel i7, 16GB RAM y 512GB SSD.',
                'cantidad' => 20,
            ],
            [
                'nombre' => 'Smartphone Samsung Galaxy',
                'precio' => 800.00,
                'proveedor_id' => 2,  // Asegúrate de que el proveedor con ID 2 exista
                'descuento_id' => 2,  // Asegúrate de que el descuento con ID 2 exista
                'descripcion' => 'Smartphone con pantalla AMOLED de 6.5 pulgadas, 128GB de almacenamiento.',
                'cantidad' => 30,
            ],
            [
                'nombre' => 'Monitor LG 27"',
                'precio' => 300.00,
                'proveedor_id' => 3,  // Asegúrate de que el proveedor con ID 3 exista
                'descuento_id' => null,  // Producto sin descuento
                'descripcion' => 'Monitor LG con resolución 4K y tecnología IPS.',
                'cantidad' => 15,
            ],
            [
                'nombre' => 'Teclado Mecánico Razer',
                'precio' => 150.00,
                'proveedor_id' => 1,  // Asegúrate de que el proveedor con ID 1 exista
                'descuento_id' => null,  // Producto sin descuento
                'descripcion' => 'Teclado mecánico con retroiluminación RGB.',
                'cantidad' => 50,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
