<?php

namespace Database\Seeders;

use App\Models\Especialidad;
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
            'especialidad_id' => Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS IV')->value('id'),
            'titulo' => 'PRACTICA CALIFICADA 2 SISTEMAS OPERATIVOS',
            'fecha' => '2023-09-20',
            'hora_inicio'   => '00:00',
            'hora_fin'      => '23:00',
            'duracion' => 10,
            'estado'    => 0
        ]);
        Examen::firstOrCreate(
        [
            'especialidad_id' => Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS II')->value('id'),
            'titulo' => 'PRACTICA CALIFICADA 2 HERRAMIENTAS DE GESTION DE REDES',
            'fecha' => '2023-09-20',
            'hora_inicio'   => '00:00',
            'hora_fin'      => '23:00',
            'duracion' => 10,
            'estado'    => 0
        ]);
        Examen::firstOrCreate(
        [
            'especialidad_id' => Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS II')->value('id'),
            'titulo' => 'PRACTICA CALIFICADA 2 SOFTWARE EN LA ADMINISTRACION DE BASE DE DATOS',
            'fecha' => '2023-01-01',
            'hora_inicio'   => '00:00',
            'hora_fin'      => '23:00',
            'duracion' => 10,
            'estado'    => 0
        ]);
        Examen::firstOrCreate(
        [
            'especialidad_id' => Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS VI')->value('id'),
            'titulo' => 'PRACTICA CALIFICADA 2 PRODUCCION AUDIOVISUAL',
            'fecha' => '2023-01-01',
            'hora_inicio'   => '00:00',
            'hora_fin'      => '23:00',
            'duracion' => 10,
            'estado'    => 0
        ]);
    }
}
