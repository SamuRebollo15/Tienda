<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('direccion')->insert([
            [
                'pais' => 'España',
                'provincia' => 'Madrid',
                'calle' => 'Calle Gran Vía, 1',
                'codigo_postal' => '28013',
            ],
            [
                'pais' => 'México',
                'provincia' => 'CDMX',
                'calle' => 'Avenida Reforma, 250',
                'codigo_postal' => '01000',
            ],
            [
                'pais' => 'Argentina',
                'provincia' => 'Buenos Aires',
                'calle' => 'Avenida 9 de Julio, 5000',
                'codigo_postal' => 'C1073',
            ],
            [
                'pais' => 'Colombia',
                'provincia' => 'Bogotá',
                'calle' => 'Carrera 7, 200',
                'codigo_postal' => '110011',
            ],
        ]);
    }
}
