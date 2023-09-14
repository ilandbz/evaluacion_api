<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = [
            'DESARROLLO DE SISTEMAS II',
            'DESARROLLO DE SISTEMAS IV',
            'DESARROLLO DE SISTEMAS VI',
        ];
    
        foreach ($especialidades as $nombre) {
            Especialidad::firstOrCreate(['nombre' => $nombre]);
        }
    }
}
