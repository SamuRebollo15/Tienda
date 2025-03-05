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
            'nombreIngles' => 'HP Laptop',
            'precio' => 1200.00,
            'proveedor_id' => 1,  
            'descuento_id' => 1,  
            'descripcion' => 'Laptop HP con procesador Intel i7, 16GB RAM y 512GB SSD.',
            'descripcionIngles' => 'HP laptop with Intel i7 processor, 16GB RAM and 512GB SSD.',
            'cantidad' => 20,
            'imagen_producto' => 'portatil.png',
        ]);

        Producto::create([
            'nombre' => 'Smartphone Samsung Galaxy',
            'nombreIngles' => 'Samsung Galaxy',
            'precio' => 800.00,
            'proveedor_id' => 2,
            'descuento_id' => 2,
            'descripcion' => 'Smartphone con pantalla AMOLED de 6.5 pulgadas, 128GB de almacenamiento.',
            'descripcionIngles' => 'Smartphone with 6.5-inch AMOLED display, 128GB storage.',
            'cantidad' => 30,
            'imagen_producto' => 'Samsumg.png',
        ]);

        Producto::create([
            'nombre' => 'Monitor LG 27"',
            'nombreIngles' => 'LG 27" Monitor',
            'precio' => 300.00,
            'proveedor_id' => 3,
            'descuento_id' => null, // Producto sin descuento
            'descripcion' => 'Monitor LG con resolución 4K y tecnología IPS.',
            'descripcionIngles' => 'LG monitor with 4K resolution and IPS technology.',
            'cantidad' => 15,
            'imagen_producto' => 'Monitor.png',
        ]);

        Producto::create([
            'nombre' => 'Teclado Mecánico Razer',
            'nombreIngles' => 'Razer Mechanical Keyboard',
            'precio' => 150.00,
            'proveedor_id' => 1,
            'descuento_id' => null, // Producto sin descuento
            'descripcion' => 'Teclado mecánico con retroiluminación RGB.',
            'descripcionIngles' => 'Mechanical keyboard with RGB backlighting.',
            'cantidad' => 50,
            'imagen_producto' => 'teclado.png',
        ]);

        // Reactivar restricciones de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
