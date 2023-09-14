<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EspecialidadSeeder::class,
            ExamenSeeder::class,
            PreguntaSeeder::class,
            AlumnoSeeder::class,
            UserSeeder::class,
        ]);

    }
}
