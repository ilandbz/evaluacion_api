<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos = [
            ['dni' => '75764056', 'apenom' => 'Baltazar Jaramillo Jose Antonio'], 
            ['dni' => '65785698', 'apenom' => 'Armando Esteban Quito'],
            ['dni' => '75621770', 'apenom' => 'Acuña Peña Leonardo Jesus'],
            ['dni' => '73529527', 'apenom' => 'Hilario Figueredo Angela'],     
            ['dni' => '71555680', 'apenom' => 'Ambrosio concepcion Miguel angel'],
            ['dni' => '74026476', 'apenom' => 'Escobal Luna Sanly Carlos'],
            ['dni' => '75720891', 'apenom' => 'Lucas Soto Fernando'],
            ['dni' => '73210123', 'apenom' => 'Mendoza garcia yulino'],
            ['dni' => '72162408', 'apenom' => 'Aquino Martel Frank Darwin'],
            ['dni' => '75792789', 'apenom' => 'Rivera Tapullima Heder'],
            ['dni' => '76550425', 'apenom' => 'Vasquez Bardales Duvan Alexander'],
            ['dni' => '71604583', 'apenom' => 'Valdivia León Brando Jhonny'],
            ['dni' => '75827122', 'apenom' => 'Ramirez Jiménez Carlos Hipólito'],
            ['dni' => '73583340', 'apenom' => 'Tiburcio chagua renzo sebastian'],
            ['dni' => '76619823', 'apenom' => 'Minaya Noreña Mariela'],
            ['dni' => '76048941', 'apenom' => 'Llanto Alvarado Luz Anali'],
            ['dni' => '73534522', 'apenom' => 'LOPEZ SALIS, Marco'],
            ['dni' => '75081996', 'apenom' => 'Janampa Falcon Fredy'],
            ['dni' => '74604011', 'apenom' => 'Pardo Cecilio Adolfo '],
            ['dni' => '78345434', 'apenom' => 'Josely Kristel Abanto Sinuiri'],
            ['dni' => '74063437', 'apenom' => 'Montesinos Calderon Brandon'],
            ['dni' => '75283038', 'apenom' => 'Mato Basilio Carlos'],
            ['dni' => '75682126', 'apenom' => 'Carhuamaca Morales Alexander Bryan'],
            ['dni' => '42916921', 'apenom' => 'CARBAJAL PICOY LUZ JANET'],
            ['dni' => '61612925', 'apenom' => 'Jaimes rimas Ronaldo chilaver'],
            ['dni' => '75527263', 'apenom' => 'Soto Ponce Hugo Jefferson'],
            ['dni' => '74603020', 'apenom' => 'Evaristo Coz Ruth Yery'],
            ['dni' => '75148158', 'apenom' => 'Hermogenes Tadeo David'],
            ['dni' => '61064787', 'apenom' => 'Vela Villanueva Geydi Yulisa'],
            ['dni' => '60257829', 'apenom' => 'Bustinza santamaria Luis alvaro'],
            ['dni' => '71966454', 'apenom' => 'Calero Cruz Pedro Elias'],
            ['dni' => '72154676', 'apenom' => 'Apolin Vigilio Antony'],
            ['dni' => '72768787', 'apenom' => 'Dionicio Prado Sebastian Alex'],
            ['dni' => '70054320', 'apenom' => 'Moises Celestino Alata'],
            ['dni' => '72293842', 'apenom' => 'Liberato Tucto Jhordan Rolando'],
        ];
        foreach ($alumnos as $alumno) {
            Alumno::firstOrCreate([
                'dni' => $alumno['dni'],
                'apenom' => $alumno['apenom'],
                'especialidad_id' => Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS IV')->value('id')
            ]);
        }
    }
}
