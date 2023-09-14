<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $usuarios=[
            ['name' => '75764056', 'password' => Hash::make('75764056'), 'alumno_id' => Alumno::where('dni', '75764056')->value('id') ],
            ['name' => '65785698', 'password' => Hash::make('65785698'), 'alumno_id' => Alumno::where('dni', '65785698')->value('id') ],
            ['name' => '75621770', 'password' => Hash::make('75621770'), 'alumno_id' => Alumno::where('dni', '75621770')->value('id') ],
            ['name' => '73529527', 'password' => Hash::make('73529527'), 'alumno_id' => Alumno::where('dni', '73529527')->value('id') ],
            ['name' => '71555680', 'password' => Hash::make('71555680'), 'alumno_id' => Alumno::where('dni', '71555680')->value('id') ],
            ['name' => '74026476', 'password' => Hash::make('74026476'), 'alumno_id' => Alumno::where('dni', '74026476')->value('id') ],
            ['name' => '75720891', 'password' => Hash::make('75720891'), 'alumno_id' => Alumno::where('dni', '75720891')->value('id') ],
            ['name' => '73210123', 'password' => Hash::make('73210123'), 'alumno_id' => Alumno::where('dni', '73210123')->value('id') ],
            ['name' => '72162408', 'password' => Hash::make('72162408'), 'alumno_id' => Alumno::where('dni', '72162408')->value('id') ],
            ['name' => '75792789', 'password' => Hash::make('75792789'), 'alumno_id' => Alumno::where('dni', '75792789')->value('id') ],
            ['name' => '76550425', 'password' => Hash::make('76550425'), 'alumno_id' => Alumno::where('dni', '76550425')->value('id') ],
            ['name' => '71604583', 'password' => Hash::make('71604583'), 'alumno_id' => Alumno::where('dni', '71604583')->value('id') ],
            ['name' => '75827122', 'password' => Hash::make('75827122'), 'alumno_id' => Alumno::where('dni', '75827122')->value('id') ],
            ['name' => '73583340', 'password' => Hash::make('73583340'), 'alumno_id' => Alumno::where('dni', '73583340')->value('id') ],
            ['name' => '76619823', 'password' => Hash::make('76619823'), 'alumno_id' => Alumno::where('dni', '76619823')->value('id') ],
            ['name' => '76048941', 'password' => Hash::make('76048941'), 'alumno_id' => Alumno::where('dni', '76048941')->value('id') ],
            ['name' => '73534522', 'password' => Hash::make('73534522'), 'alumno_id' => Alumno::where('dni', '73534522')->value('id') ],
            ['name' => '75081996', 'password' => Hash::make('75081996'), 'alumno_id' => Alumno::where('dni', '75081996')->value('id') ],
            ['name' => '74604011', 'password' => Hash::make('74604011'), 'alumno_id' => Alumno::where('dni', '74604011')->value('id') ],
            ['name' => '78345434', 'password' => Hash::make('78345434'), 'alumno_id' => Alumno::where('dni', '78345434')->value('id') ],
            ['name' => '74063437', 'password' => Hash::make('74063437'), 'alumno_id' => Alumno::where('dni', '74063437')->value('id') ],
            ['name' => '75283038', 'password' => Hash::make('75283038'), 'alumno_id' => Alumno::where('dni', '75283038')->value('id') ],
            ['name' => '75682126', 'password' => Hash::make('75682126'), 'alumno_id' => Alumno::where('dni', '75682126')->value('id') ],
            ['name' => '42916921', 'password' => Hash::make('42916921'), 'alumno_id' => Alumno::where('dni', '42916921')->value('id') ],
            ['name' => '61612925', 'password' => Hash::make('61612925'), 'alumno_id' => Alumno::where('dni', '61612925')->value('id') ],
            ['name' => '75527263', 'password' => Hash::make('75527263'), 'alumno_id' => Alumno::where('dni', '75527263')->value('id') ],
            ['name' => '74603020', 'password' => Hash::make('74603020'), 'alumno_id' => Alumno::where('dni', '74603020')->value('id') ],
            ['name' => '75148158', 'password' => Hash::make('75148158'), 'alumno_id' => Alumno::where('dni', '75148158')->value('id') ],
            ['name' => '61064787', 'password' => Hash::make('61064787'), 'alumno_id' => Alumno::where('dni', '61064787')->value('id') ],
            ['name' => '60257829', 'password' => Hash::make('60257829'), 'alumno_id' => Alumno::where('dni', '60257829')->value('id') ],
            ['name' => '71966454', 'password' => Hash::make('71966454'), 'alumno_id' => Alumno::where('dni', '71966454')->value('id') ],
            ['name' => '72154676', 'password' => Hash::make('72154676'), 'alumno_id' => Alumno::where('dni', '72154676')->value('id') ],
            ['name' => '72768787', 'password' => Hash::make('72768787'), 'alumno_id' => Alumno::where('dni', '72768787')->value('id') ],
            ['name' => '70054320', 'password' => Hash::make('70054320'), 'alumno_id' => Alumno::where('dni', '70054320')->value('id') ],
            ['name' => '72293842', 'password' => Hash::make('72293842'), 'alumno_id' => Alumno::where('dni', '72293842')->value('id') ],
        ];

        foreach ($usuarios as $user) {
            User::firstOrCreate([
                'name'      => $user['name'],
                'password'  => $user['password'],
                'alumno_id' => $user['alumno_id'],
            ]);
        }        
    }
}
