<?php

namespace Database\Seeders;

use App\Models\Alternativa;
use App\Models\Examen;
use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id= Examen::where('titulo', 'PRACTICA CALIFICADA 2 SISTEMAS OPERATIVOS')->value('id'); 
        $preguntas = [ 

            [
                'text' => 'Cuál es la función principal del núcleo (kernel) en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Controlar todas las operaciones esenciales del sistema.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Administrar los archivos del sistema.'],
                    ['cod' => 'b', 'text' => 'Procesar datos en una interfaz gráfica.'],
                    ['cod' => 'c', 'text' => 'Gestionar la comunicación entre dispositivos.'],
                    ['cod' => 'd', 'text' => 'Controlar todas las operaciones esenciales del sistema.'],
                ]
            ],
            [
                'text' => 'En qué consiste la separación entre espacios de usuario y el modo kernel?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Los programas en ejecución se dividen en dos espacios con diferentes niveles de privilegio.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Los usuarios pueden ejecutar programas en el espacio de kernel.'],
                    ['cod' => 'b', 'text' => 'El núcleo del sistema operativo opera en el espacio de usuario.'],
                    ['cod' => 'c', 'text' => 'Los programas en ejecución se dividen en dos espacios con diferentes niveles de privilegio.'],
                    ['cod' => 'd', 'text' => 'Solo los administradores pueden acceder al espacio de usuario.'],
                ]
            ],
            [
                'text' => 'Qué componente del sistema operativo se encarga de la creación, programación y terminación de procesos?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Gestión de procesos.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Gestión de memoria.'],
                    ['cod' => 'b', 'text' => 'Sistema de archivos.'],
                    ['cod' => 'c', 'text' => 'Interfaz de usuario.'],
                    ['cod' => 'd', 'text' => 'Gestión de procesos.'],
                ]
            ],
            [
                'text' => 'Cuál es la función principal de la gestión de memoria en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Asignar y liberar espacio de memoria a los procesos',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Decidir qué proceso se ejecutará a continuación.'],
                    ['cod' => 'b', 'text' => 'Asignar y liberar espacio de memoria a los procesos'],
                    ['cod' => 'c', 'text' => 'Gestionar la comunicación entre procesos.'],
                    ['cod' => 'd', 'text' => 'Administrar la interacción con dispositivos de entrada/salida.'],
                ]
            ],
            [
                'text' => 'Qué componente del sistema operativo organiza y administra la información almacenada en el disco duro?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Sistema de archivos.',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Gestión de memoria.'],
                    ['cod' => 'b', 'text' => 'Planificador de procesos.'],
                    ['cod' => 'c', 'text' => 'Sistema de archivos.'],
                    ['cod' => 'd', 'text' => 'Sistema de red'],
                ]
            ],
            [
                'text' => 'Cuál de los siguientes estados de un proceso implica que el proceso está listo para ejecutarse pero aún no tiene la CPU?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Listo',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'En ejecución.'],
                    ['cod' => 'b', 'text' => 'Listo'],
                    ['cod' => 'c', 'text' => 'En espera.'],
                    ['cod' => 'd', 'text' => 'Finalizado.'],
                ]
            ],
            [
                'text' => 'Qué ocurre durante un cambio de contexto en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'La CPU pasa de un proceso a otro',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Un proceso finaliza su ejecución.'],
                    ['cod' => 'b', 'text' => 'La CPU pasa de un proceso a otro'],
                    ['cod' => 'c', 'text' => 'Un proceso cambia su estado de "en espera" a "en ejecución".'],
                    ['cod' => 'd', 'text' => 'Se libera espacio en memoria para otro proceso.'],
                ]
            ],
            [
                'text' => 'Cuáles son los elementos típicos que componen una imagen de proceso?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Código ejecutable, datos, pila, contador de programa y registros',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Teclado, monitor, mouse.'],
                    ['cod' => 'b', 'text' => 'Programa, iconos, carpetas.'],
                    ['cod' => 'c', 'text' => 'Código ejecutable, datos, pila, contador de programa y registros'],
                    ['cod' => 'd', 'text' => 'Núcleo, memoria, disco duro.'],
                ]
            ],
            [
                'text' => 'Qué significa PCB en relación con la gestión de procesos?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Bloque de Control de Proceso',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Proceso Central de Base.'],
                    ['cod' => 'b', 'text' => 'Bloque de Control de Proceso'],
                    ['cod' => 'c', 'text' => 'Plataforma de Comunicación Binaria.'],
                    ['cod' => 'd', 'text' => 'Proceso y Control de Backups.'],
                ]
            ],
            [
                'text' => 'Cuál de los siguientes no es un estado en el que puede estar un proceso?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'En modo kernel',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'En espera.'],
                    ['cod' => 'b', 'text' => 'En modo kernel'],
                    ['cod' => 'c', 'text' => 'Finalizado.'],
                    ['cod' => 'd', 'text' => 'Listo.'],
                ]
            ],
            [
                'text' => 'Qué componente del sistema operativo se encarga de decidir cuál proceso se ejecutará a continuación?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Planificador de procesos',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Sistema de archivos.'],
                    ['cod' => 'b', 'text' => 'Planificador de procesos'],
                    ['cod' => 'c', 'text' => 'Gestión de memoria.'],
                    ['cod' => 'd', 'text' => 'Interfaz de usuario.'],
                ]
            ],
            [
                'text' => 'Cuál de los siguientes no es un beneficio de la interfaz de línea de comandos (CLI)?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Interfaz gráfica',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Automatización de tareas.'],
                    ['cod' => 'b', 'text' => 'Mayor control sobre el sistema.'],
                    ['cod' => 'c', 'text' => 'Interfaz gráfica'],
                    ['cod' => 'd', 'text' => 'Eficiencia en la ejecución de comandos.'],
                ]
            ],
            [
                'text' => 'Cuál es la importancia de la sincronización entre procesos en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Evitar conflictos y asegurar la integridad de los datos',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Evitar conflictos y asegurar la integridad de los datos'],
                    ['cod' => 'b', 'text' => 'Realizar cambios de contexto de manera más rápida.'],
                    ['cod' => 'c', 'text' => 'Aumentar la velocidad de la CPU.'],
                    ['cod' => 'd', 'text' => 'Ejecutar procesos en paralelo sin restricciones.'],
                ]
            ],
            [
                'text' => 'Qué componente del sistema operativo se encarga de administrar la comunicación y el intercambio de datos entre dispositivos en una red?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Gestión de redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Sistema de archivos.'],
                    ['cod' => 'b', 'text' => 'Planificador de procesos.'],
                    ['cod' => 'c', 'text' => 'Gestión de redes'],
                    ['cod' => 'd', 'text' => 'Sistema de entrada/salida.'],
                ]
            ],
            [
                'text' => 'Qué componente del sistema operativo asigna espacio de memoria a cada proceso y evita conflictos?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Gestión de memoria',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Sistema de archivos.'],
                    ['cod' => 'b', 'text' => 'Gestión de memoria'],
                    ['cod' => 'c', 'text' => 'Interfaz de usuario.'],
                    ['cod' => 'd', 'text' => 'Planificador de procesos.'],
                ]
            ],
            [
                'text' => 'Cuál de los siguientes es un ejemplo de comando utilizado en una interfaz de línea de comandos (CLI) para listar el contenido de un directorio?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'ls (o dir en Windows)',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'ls (o dir en Windows)'],
                    ['cod' => 'b', 'text' => 'open.'],
                    ['cod' => 'c', 'text' => 'copy.'],
                    ['cod' => 'd', 'text' => 'create.'],
                ]
            ],
            [
                'text' => 'Cuál es la función principal del sistema de archivos en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Organizar y administrar la información almacenada en el disco duro',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Asignar memoria a los procesos.'],
                    ['cod' => 'b', 'text' => 'Administrar la comunicación con dispositivos de entrada/salida.'],
                    ['cod' => 'c', 'text' => 'Organizar y administrar la información almacenada en el disco duro'],
                    ['cod' => 'd', 'text' => 'Controlar la ejecución de programas.'],
                ]
            ],
            [
                'text' => 'Qué tipo de interfaz permite a los usuarios interactuar con el sistema operativo mediante comandos de texto?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Interfaz de línea de comandos (CLI)',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Interfaz gráfica de usuario (GUI).'],
                    ['cod' => 'b', 'text' => 'Interfaz de línea de comandos (CLI)'],
                    ['cod' => 'c', 'text' => 'Interfaz de usuario táctil.'],
                    ['cod' => 'd', 'text' => 'Interfaz de usuario por voz.'],
                ]
            ],
            [
                'text' => 'Cuál es el objetivo principal de la programación de procesos en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Decidir qué proceso se ejecutará y en qué momento',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Decidir qué proceso se ejecutará y en qué momento'],
                    ['cod' => 'b', 'text' => 'Administrar la memoria del sistema.'],
                    ['cod' => 'c', 'text' => 'Organizar la información almacenada en el disco duro.'],
                    ['cod' => 'd', 'text' => 'Controlar la comunicación entre dispositivos de entrada/salida.'],
                ]
            ],
            [
                'text' => 'Cuál de los siguientes no es un estado en el que puede estar un proceso?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Listo para ejecutarse',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Listo para ejecutarse'],
                    ['cod' => 'b', 'text' => 'En espera.'],
                    ['cod' => 'c', 'text' => 'En ejecución.'],
                    ['cod' => 'd', 'text' => 'Finalizado.'],
                ]
            ],

 
        ];
        // foreach ($preguntas as $menuData) {
        //     $pregunta = Pregunta::firstOrCreate(
        //         [
        //             'text' => $menuData['text'], 
        //             'correct_answer' => $menuData['correct_answer'], 
        //             'examen_id' => $menuData['examen_id'], 
        //             'answer' => $menuData['answer'],
        //             'category' => $menuData['category'],
        //         ]
        //     );
        //     foreach($menuData['alternativas'] as $alternativa){
        //         $reg = Alternativa::firstOrCreate([
        //             'pregunta_id'   => $pregunta->id,
        //             'text'   => $alternativa['text'],
        //             'cod'    => $alternativa['cod'],
        //         ]);
        //     }
        // }
        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate([
                'text' => $menuData['text'], 
                'correct_answer' => $menuData['correct_answer'], 
                'examen_id' => $menuData['examen_id'], 
                'answer' => $menuData['answer'],
            ]);
        
            // Utiliza createMany para crear todas las alternativas de una vez
            $alternativas = collect($menuData['alternativas'])->map(function ($alternativa) use ($pregunta) {
                return [
                    'pregunta_id'   => $pregunta->id,
                    'text'          => $alternativa['text'],
                    'cod'           => $alternativa['cod'],
                ];
            })->toArray();
        
            Alternativa::insert($alternativas);
        }
    }


}
