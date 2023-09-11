<?php

namespace Database\Seeders;

use App\Models\Examen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Examen::firstOrCreate(
        [
            'titulo' => 'PRACTICA CALIFICADA 2 SISTEMAS OPERATIVOS',
            'fecha' => date('Y-m-d'),
            'hora_inicio'   => '00:00',
            'hora_fin'      => '23:00',
            'duracion' => 20 
        ]);
    }
}
