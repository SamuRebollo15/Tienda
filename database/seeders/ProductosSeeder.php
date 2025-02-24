<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto; // 👈 Importar el modelo
use Illuminate\Support\Facades\DB;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Desactivar restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Insertar productos
        Producto::create([
            'nombre' => 'Laptop HP',
            'precio' => 1200.00,
            'proveedor_id' => 1,  // Asegúrate de que el proveedor con ID 1 exista
            'descuento_id' => 1,  // Asegúrate de que el descuento con ID 1 exista
            'descripcion' => 'Laptop HP con procesador Intel i7, 16GB RAM y 512GB SSD.',
            'cantidad' => 20,
        ]);

        Producto::create([
            'nombre' => 'Smartphone Samsung Galaxy',
            'precio' => 800.00,
            'proveedor_id' => 2,
            'descuento_id' => 2,
            'descripcion' => 'Smartphone con pantalla AMOLED de 6.5 pulgadas, 128GB de almacenamiento.',
            'cantidad' => 30,
        ]);

        Producto::create([
            'nombre' => 'Monitor LG 27"',
            'precio' => 300.00,
            'proveedor_id' => 3,
            'descuento_id' => null, // Producto sin descuento
            'descripcion' => 'Monitor LG con resolución 4K y tecnología IPS.',
            'cantidad' => 15,
        ]);

        Producto::create([
            'nombre' => 'Teclado Mecánico Razer',
            'precio' => 150.00,
            'proveedor_id' => 1,
            'descuento_id' => null, // Producto sin descuento
            'descripcion' => 'Teclado mecánico con retroiluminación RGB.',
            'cantidad' => 50,
        ]);

        // Reactivar restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
