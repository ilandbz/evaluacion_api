<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Especialidad;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidad_id = Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS II')->value('id');
        $especialidad_id2 = Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS IV')->value('id');
        $especialidad_id3 = Especialidad::where('nombre', 'DESARROLLO DE SISTEMAS VI')->value('id');
        $alumnos = [
            ['dni' => '75764056', 'apenom' => 'Baltazar Jaramillo Jose Antonio', 'especialidad_id' => $especialidad_id2], 
            ['dni' => '65785698', 'apenom' => 'Armando Esteban Quito', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75621770', 'apenom' => 'Acuña Peña Leonardo Jesus', 'especialidad_id' => $especialidad_id2],
            ['dni' => '73529527', 'apenom' => 'Hilario Figueredo Angela', 'especialidad_id' => $especialidad_id2],     
            ['dni' => '71555680', 'apenom' => 'Ambrosio concepcion Miguel angel', 'especialidad_id' => $especialidad_id2],
            ['dni' => '74026476', 'apenom' => 'Escobal Luna Sanly Carlos', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75720891', 'apenom' => 'Lucas Soto Fernando', 'especialidad_id' => $especialidad_id2],
            ['dni' => '73210123', 'apenom' => 'Mendoza garcia yulino', 'especialidad_id' => $especialidad_id2],
            ['dni' => '72162408', 'apenom' => 'Aquino Martel Frank Darwin', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75792789', 'apenom' => 'Rivera Tapullima Heder', 'especialidad_id' => $especialidad_id2],
            ['dni' => '76550425', 'apenom' => 'Vasquez Bardales Duvan Alexander', 'especialidad_id' => $especialidad_id2],
            ['dni' => '71604583', 'apenom' => 'Valdivia León Brando Jhonny', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75827122', 'apenom' => 'Ramirez Jiménez Carlos Hipólito', 'especialidad_id' => $especialidad_id2],
            ['dni' => '73583340', 'apenom' => 'Tiburcio chagua renzo sebastian', 'especialidad_id' => $especialidad_id2],
            ['dni' => '76619823', 'apenom' => 'Minaya Noreña Mariela', 'especialidad_id' => $especialidad_id2],
            ['dni' => '76048941', 'apenom' => 'Llanto Alvarado Luz Anali', 'especialidad_id' => $especialidad_id2],
            ['dni' => '73534522', 'apenom' => 'LOPEZ SALIS, Marco', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75081996', 'apenom' => 'Janampa Falcon Fredy', 'especialidad_id' => $especialidad_id2],
            ['dni' => '74604011', 'apenom' => 'Pardo Cecilio Adolfo ', 'especialidad_id' => $especialidad_id2],
            ['dni' => '78345434', 'apenom' => 'Josely Kristel Abanto Sinuiri', 'especialidad_id' => $especialidad_id2],
            ['dni' => '74063437', 'apenom' => 'Montesinos Calderon Brandon', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75283038', 'apenom' => 'Mato Basilio Carlos', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75682126', 'apenom' => 'Carhuamaca Morales Alexander Bryan', 'especialidad_id' => $especialidad_id2],
            ['dni' => '42916921', 'apenom' => 'CARBAJAL PICOY LUZ JANET', 'especialidad_id' => $especialidad_id2],
            ['dni' => '61612925', 'apenom' => 'Jaimes rimas Ronaldo chilaver', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75527263', 'apenom' => 'Soto Ponce Hugo Jefferson', 'especialidad_id' => $especialidad_id2],
            ['dni' => '74603020', 'apenom' => 'Evaristo Coz Ruth Yery', 'especialidad_id' => $especialidad_id2],
            ['dni' => '75148158', 'apenom' => 'Hermogenes Tadeo David', 'especialidad_id' => $especialidad_id2],
            ['dni' => '61064787', 'apenom' => 'Vela Villanueva Geydi Yulisa', 'especialidad_id' => $especialidad_id2],
            ['dni' => '60257829', 'apenom' => 'Bustinza santamaria Luis alvaro', 'especialidad_id' => $especialidad_id2],
            ['dni' => '71966454', 'apenom' => 'Calero Cruz Pedro Elias', 'especialidad_id' => $especialidad_id2],
            ['dni' => '72154676', 'apenom' => 'Apolin Vigilio Antony', 'especialidad_id' => $especialidad_id2],
            ['dni' => '72768787', 'apenom' => 'Dionicio Prado Sebastian Alex', 'especialidad_id' => $especialidad_id2],
            ['dni' => '70054320', 'apenom' => 'Moises Celestino Alata', 'especialidad_id' => $especialidad_id2],
            ['dni' => '72293842', 'apenom' => 'Liberato Tucto Jhordan Rolando', 'especialidad_id' => $especialidad_id2],
            ['dni' => '71578767', 'apenom' => 'Marticorena Acuña Milene Najhely', 'especialidad_id' => $especialidad_id],
            ['dni' => '62531050', 'apenom' => 'García Morales Isaú Yeferson', 'especialidad_id' => $especialidad_id],     
            ['dni' => '76277033', 'apenom' => 'López Ramírez adely doris', 'especialidad_id' => $especialidad_id],     
            ['dni' => '47710741', 'apenom' => 'Susanivar Agustin Neruda', 'especialidad_id' => $especialidad_id], 
            ['dni' => '76344206', 'apenom' => 'Solis yanac alex jeancarlos', 'especialidad_id' => $especialidad_id],         
            ['dni' => '72268682', 'apenom' => 'Santamaria Paucar Sheyla Rocío', 'especialidad_id' => $especialidad_id],      
            ['dni' => '71306160', 'apenom' => 'Nazario Alcedo Jeferson', 'especialidad_id' => $especialidad_id],   
            ['dni' => '76398710', 'apenom' => 'SUÑIGA CALDERÓN JHON KENEDY', 'especialidad_id' => $especialidad_id],         
            ['dni' => '77055325', 'apenom' => 'Chagua Albornoz Junior', 'especialidad_id' => $especialidad_id],      
            ['dni' => '76828850', 'apenom' => 'Bruno Pilco sneijder jofred', 'especialidad_id' => $especialidad_id],
            ['dni' => '75017172', 'apenom' => 'Poma ulpiano luz angelica', 'especialidad_id' => $especialidad_id],     
            ['dni' => '72793837', 'apenom' => 'Ureta aránguez José Carlos', 'especialidad_id' => $especialidad_id],        
            ['dni' => '73591628', 'apenom' => 'Janampa Aranda Danery Sandro', 'especialidad_id' => $especialidad_id],       
            ['dni' => '72800436', 'apenom' => 'Villavicencio Alvarado Jean Pierre', 'especialidad_id' => $especialidad_id],
            ['dni' => '60217514', 'apenom' => 'Huaraca sacramento Yoel Yonatan', 'especialidad_id' => $especialidad_id],
            ['dni' => '60565011', 'apenom' => 'Acencios Melendres Frederic', 'especialidad_id' => $especialidad_id],
            ['dni' => '74742558', 'apenom' => 'Vigilio Zarate Frank Diogo', 'especialidad_id' => $especialidad_id],      
            ['dni' => '76799942', 'apenom' => 'Walter Jhair Guerra Ccepaya', 'especialidad_id' => $especialidad_id],       
            ['dni' => '62117339', 'apenom' => 'Leiva Poma Yan Hotmel', 'especialidad_id' => $especialidad_id],      
            ['dni' => '74546070', 'apenom' => 'Alvarado Sebastian Abraham justo', 'especialidad_id' => $especialidad_id],
            ['dni' => '75115700', 'apenom' => 'Rosas Pinto Marco Antonio', 'especialidad_id' => $especialidad_id], 
            ['dni' => '73540477', 'apenom' => 'MARTEL FABIAN JEANPOOL', 'especialidad_id' => $especialidad_id],        
            ['dni' => '74610710', 'apenom' => 'Salazar Figueroa Nilton Homar', 'especialidad_id' => $especialidad_id],
            ['dni' => '71528990', 'apenom' => 'Castañeda Recinas Marco Antonio', 'especialidad_id' => $especialidad_id],    
            ['dni' => '73611598', 'apenom' => 'Caqui Duran Lidia', 'especialidad_id' => $especialidad_id],  
            ['dni' => '62317678', 'apenom' => 'Encarnación Ubaldo Yeny', 'especialidad_id' => $especialidad_id],
            ['dni' => '71303612', 'apenom' => 'Falcon Atachagua Ronaldiño', 'especialidad_id' => $especialidad_id],
            ['dni' => '74363863', 'apenom' => 'TIBURCIO NAZARIO GERLYN', 'especialidad_id' => $especialidad_id],       
            ['dni' => '74595877', 'apenom' => 'Daza moreno', 'especialidad_id' => $especialidad_id],          
            ['dni' => '47383290', 'apenom' => 'Garcia Boñon Isabel Victoria', 'especialidad_id' => $especialidad_id],
            ['dni' => '74143844', 'apenom' => 'Simon Tolentino David Jesus', 'especialidad_id' => $especialidad_id],     
            ['dni' => '73581093', 'apenom' => 'esteban guillen noe', 'especialidad_id' => $especialidad_id],      
            ['dni' => '73334386', 'apenom' => 'Cumbia Ordoñez Emerson', 'especialidad_id' => $especialidad_id],    
            ['dni' => '76272478', 'apenom' => 'Clemente Retis Josselin Xiomara', 'especialidad_id' => $especialidad_id],
            ['dni' => '60081762', 'apenom' => 'Apolo valle liseth', 'especialidad_id' => $especialidad_id],           
            ['dni' => '72424748', 'apenom' => 'Guerra garcia junior alexander', 'especialidad_id' => $especialidad_id],
            ['dni' => '73611242', 'apenom' => 'Sebastian Camones Yhoshelyn katheryn', 'especialidad_id' => $especialidad_id],
            ['dni' => '73660039', 'apenom' => 'Valentín Flores zulema', 'especialidad_id' => $especialidad_id],
            ['dni' => '73972749', 'apenom' => 'Santa Cruz Davila Andy Bernabe', 'especialidad_id' => $especialidad_id],
        ];


        foreach ($alumnos as $alumno) {
            $registro = Alumno::firstOrCreate([
                'dni' => $alumno['dni'],
                'apenom' => $alumno['apenom'],
                'especialidad_id' => $alumno['especialidad_id']
            ]);

            User::firstOrCreate([
                'name'      => $registro->dni,
                'password'  => Hash::make($registro->dni),
                'alumno_id' => $registro->id,
            ]);


        }
    }
}
