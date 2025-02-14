<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DescuentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('descuento')->insert([
            [
                'nombre' => 'Descuento de Navidad',
                'porcentaje' => 15.00,
                'fecha_finalizacion' => '2025-01-01',
                'descripcion' => 'Descuento especial por las fiestas navideñas.',
            ],
            [
                'nombre' => 'Descuento de Verano',
                'porcentaje' => 10.00,
                'fecha_finalizacion' => '2025-06-30',
                'descripcion' => 'Promoción por las vacaciones de verano.',
            ],
            [
                'nombre' => 'Descuento de Black Friday',
                'porcentaje' => 30.00,
                'fecha_finalizacion' => '2025-11-30',
                'descripcion' => 'Descuento exclusivo por el Black Friday.',
            ],
            [
                'nombre' => 'Descuento por primer compra',
                'porcentaje' => 5.00,
                'fecha_finalizacion' => '2025-12-31',
                'descripcion' => 'Descuento para clientes nuevos en su primera compra.',
            ],
        ]);
    }
}
