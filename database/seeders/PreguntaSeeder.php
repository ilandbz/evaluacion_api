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
        // $id= Examen::where('titulo', 'PRACTICA CALIFICADA 2 SISTEMAS OPERATIVOS')->value('id'); 
        // $id2= Examen::where('titulo', 'PRACTICA CALIFICADA 2 SOFTWARE EN LA ADMINISTRACION DE BASE DE DATOS')->value('id'); 
        // $id3= Examen::where('titulo', 'PRACTICA CALIFICADA 2 HERRAMIENTAS DE GESTION DE REDES')->value('id');
        // $id4= Examen::where('titulo', 'EXAMEN DE MEDIO CURSO SOFTWARE EN LA ADMINISTRACION DE BASE DE DATOS')->value('id');
        $id= Examen::where('titulo', 'EXAMEN DE MEDIO CURSO SISTEMAS OPERATIVOS')->value('id');

        $preguntas=[
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
                'text' => 'Que software no se utiliza para gestionar una base de datos?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'SQL.',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'SQL YOG'],
                    ['cod' => 'b', 'text' => 'XAMPP'],
                    ['cod' => 'c', 'text' => 'SQL.'],
                    ['cod' => 'd', 'text' => 'WORKBENCH'],
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
                'text' => '¿Qué nivel de la jerarquía de la memoria se caracteriza por ser la memoria más rápida y cercana a la CPU?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Caché',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Memoria principal.'],
                    ['cod' => 'b', 'text' => 'Memoria secundaria.'],
                    ['cod' => 'c', 'text' => 'Caché'],
                    ['cod' => 'd', 'text' => 'Registros.'],
                ],
            ],
            [
                'text' => '¿Cuál es la principal ventaja de la memoria caché en comparación con la memoria principal?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Mayor velocidad de acceso',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor capacidad.'],
                    ['cod' => 'b', 'text' => 'Menor velocidad.'],
                    ['cod' => 'c', 'text' => 'Mayor velocidad de acceso'],
                    ['cod' => 'd', 'text' => 'Acceso secuencial.'],
                ],
            ],
            [
                'text' => '¿Qué tipo de memoria almacena datos e instrucciones utilizados con frecuencia para mejorar el rendimiento de acceso?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Registros',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Memoria principal.'],
                    ['cod' => 'b', 'text' => 'Memoria secundaria.'],
                    ['cod' => 'c', 'text' => 'Caché.'],
                    ['cod' => 'd', 'text' => 'Registros'],
                ],
            ],
            [
                'text' => '¿Cuál es el objetivo principal de la partición de la memoria en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Gestionar programas y procesos de manera eficiente',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Almacenar programas permanentemente.'],
                    ['cod' => 'b', 'text' => 'Gestionar programas y procesos de manera eficiente'],
                    ['cod' => 'c', 'text' => 'Proporcionar acceso a la red.'],
                    ['cod' => 'd', 'text' => 'Controlar la velocidad del procesador.'],
                ],
            ],

            [
                'text' => '¿Cuál es el propósito de la partición paginada en la gestión de la memoria?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Dividir la memoria en bloques de tamaño fijo',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Asignar espacio según las necesidades de cada proceso'],
                    ['cod' => 'b', 'text' => 'Almacenar datos en la memoria caché.'],
                    ['cod' => 'c', 'text' => 'Organizar archivos en la memoria secundaria.'],
                    ['cod' => 'd', 'text' => 'Dividir la memoria en bloques de tamaño fijo'],
                ],
            ],
            [
                'text' => '¿Qué tipo de partición divide la memoria en segmentos de tamaños variables?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Partición segmentada.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Partición fija.'],
                    ['cod' => 'b', 'text' => 'Partición variable.'],
                    ['cod' => 'c', 'text' => 'Partición paginada.'],
                    ['cod' => 'd', 'text' => 'Partición segmentada.'],
                ],
            ],
            [
                'text' => '¿Qué es la fragmentación interna en la gestión de la memoria?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Espacio no utilizado dentro de una partición asignada.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Espacio libre entre particiones.'],
                    ['cod' => 'b', 'text' => 'Espacio no utilizado en la memoria secundaria.'],
                    ['cod' => 'c', 'text' => 'Área de almacenamiento en caché.'],
                    ['cod' => 'd', 'text' => 'Espacio no utilizado dentro de una partición asignada.'],
                ],
            ],
            [
                'text' => '¿Cuál de los siguientes no es un nivel de la jerarquía de la memoria?',
                'examen_id' => $id,
                'answer' => 'd',
                'correct_answer' => 'Almacenamiento en red.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Caché.'],
                    ['cod' => 'b', 'text' => 'Memoria principal.'],
                    ['cod' => 'c', 'text' => 'Área de almacenamiento en caché.'],
                    ['cod' => 'd', 'text' => 'Almacenamiento en red.'],
                ],
            ],
            [
                'text' => '¿Cuál es el propósito principal de la jerarquía de la memoria en un sistema informático?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Optimizar el acceso a los datos y mejorar el rendimiento.',
                'category' => 'SISTEMAS INFORMÁTICOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Controlar la partición de la memoria.'],
                    ['cod' => 'b', 'text' => 'Optimizar el acceso a los datos y mejorar el rendimiento.'],
                    ['cod' => 'c', 'text' => 'Proporcionar seguridad en la red.'],
                    ['cod' => 'd', 'text' => 'Gestionar la interfaz de usuario.'],
                ],
            ],
            [
                'text' => '¿Qué tipo de memoria se utiliza para almacenar programas y datos mientras están en uso?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Memoria principal (RAM).',
                'category' => 'SISTEMAS INFORMÁTICOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Caché.'],
                    ['cod' => 'b', 'text' => 'Memoria secundaria.'],
                    ['cod' => 'c', 'text' => 'Memoria principal (RAM).'],
                    ['cod' => 'd', 'text' => 'Registros.'],
                ],
            ],
            [
                'text' => '¿Qué componente de la jerarquía de memoria es el más cercano a la CPU?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Registros',
                'category' => 'MEMORIA Y ALMACENAMIENTO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Memoria principal.'],
                    ['cod' => 'b', 'text' => 'Caché L2.'],
                    ['cod' => 'c', 'text' => 'Registros'],
                    ['cod' => 'd', 'text' => 'Memoria secundaria.'],
                ],
            ],
            [
                'text' => 'Cuál de los siguientes NO es un nivel típico de la jerarquía de la memoria?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Disco duro externo',
                'category' => 'MEMORIA Y ALMACENAMIENTO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Memoria secundaria.'],
                    ['cod' => 'b', 'text' => 'Caché L3.'],
                    ['cod' => 'c', 'text' => 'Disco duro externo'],
                    ['cod' => 'd', 'text' => 'Memoria principal.'],
                ],
            ],
            [
                'text' => 'Cuál de las siguientes afirmaciones es verdadera sobre la memoria caché?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Almacena copias de datos e instrucciones utilizados con frecuencia.',
                'category' => 'MEMORIA Y ALMACENAMIENTO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Almacena copias de datos e instrucciones utilizados con frecuencia.'],
                    ['cod' => 'b', 'text' => 'Es la memoria principal utilizada por el sistema operativo.'],
                    ['cod' => 'c', 'text' => 'Es más lenta que la memoria principal.'],
                    ['cod' => 'd', 'text' => 'Almacena datos permanentemente.'],
                ],
            ],
            [
                'text' => 'Qué tipo de memoria se utiliza para almacenar datos e instrucciones temporales durante la ejecución de un programa?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Registros',
                'category' => 'MEMORIA Y ALMACENAMIENTO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Registros'],
                    ['cod' => 'b', 'text' => 'Caché.'],
                    ['cod' => 'c', 'text' => 'Memoria principal.'],
                    ['cod' => 'd', 'text' => 'Memoria secundaria.'],
                ],
            ],
            [
                'text' => 'Cuál es el propósito de la gestión de memoria en un sistema operativo?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Asignar y liberar memoria a los procesos.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Controlar la partición de la memoria secundaria.'],
                    ['cod' => 'b', 'text' => 'Asignar y liberar memoria a los procesos.'],
                    ['cod' => 'c', 'text' => 'Gestionar la velocidad de la CPU.'],
                    ['cod' => 'd', 'text' => 'Almacenar datos permanentemente.'],
                ],
            ],
            [
                'text' => '¿Qué tipo de partición asigna espacio según las necesidades de cada proceso?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Partición variable.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Partición fija.'],
                    ['cod' => 'b', 'text' => 'Partición variable.'],
                    ['cod' => 'c', 'text' => 'Partición paginada.'],
                    ['cod' => 'd', 'text' => 'Partición segmentada.'],
                ],
            ],
            [
                'text' => '¿Qué tipo de memoria almacena datos a largo plazo incluso cuando la computadora está apagada?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'Memoria secundaria.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Caché.'],
                    ['cod' => 'b', 'text' => 'Memoria principal.'],
                    ['cod' => 'c', 'text' => 'Memoria secundaria.'],
                    ['cod' => 'd', 'text' => 'Registros.'],
                ],
            ],            
            [
                'text' => '¿Cuál de los siguientes NO es un nivel de la jerarquía de la memoria?',
                'examen_id' => $id,
                'answer' => 'b',
                'correct_answer' => 'Teclado y mouse.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Caché L1.'],
                    ['cod' => 'b', 'text' => 'Teclado y mouse.'],
                    ['cod' => 'c', 'text' => 'Caché L2.'],
                    ['cod' => 'd', 'text' => 'Memoria principal.'],
                ],
            ],  
            [
                'text' => '¿Cuál de los siguientes términos se refiere a la organización de diferentes niveles de memoria en un sistema informático?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Jerarquía de la memoria.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Jerarquía de la memoria.'],
                    ['cod' => 'b', 'text' => 'Asignación de memoria.'],
                    ['cod' => 'c', 'text' => 'Gestión de caché.'],
                    ['cod' => 'd', 'text' => 'Partición de la memoria.'],
                ],
            ],              
            [
                'text' => '¿Qué es la segmentación en la gestión de memoria?',
                'examen_id' => $id,
                'answer' => 'c',
                'correct_answer' => 'La división de programas en segmentos lógicos',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'La división de memoria en bloques fijos.'],
                    ['cod' => 'b', 'text' => 'La asignación de memoria basada en páginas.'],
                    ['cod' => 'c', 'text' => 'La división de programas en segmentos lógicos'],
                    ['cod' => 'd', 'text' => 'La asignación de memoria mediante paginación.'],
                ],
            ],
            [
                'text' => '¿Cómo se traducen las direcciones virtuales a físicas en la segmentación?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Mediante una tabla de páginas.',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mediante una tabla de páginas.'],
                    ['cod' => 'b', 'text' => 'A través de la Unidad de Gestión de Memoria.'],
                    ['cod' => 'c', 'text' => 'Usando un contador de segmento.'],
                    ['cod' => 'd', 'text' => 'Directamente a través del bus de direcciones.'],
                ],
            ],
            [
                'text' => '¿Sistema que se utiliza principalmente para la auditoria y monitorizacion de seguridad informática como penetracion de hacking?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Kali Linux',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Kali Linux'],
                    ['cod' => 'b', 'text' => 'Ubuntu'],
                    ['cod' => 'c', 'text' => 'Debian'],
                    ['cod' => 'd', 'text' => 'Fedora'],
                ],
            ],
            [
                'text' => '¿Cual es el Sistema Operativo que se utiliza para centralizar servicios como por ejemplo archivos y proxy?',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Windows Server',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Windows Server'],
                    ['cod' => 'b', 'text' => 'Ubuntu'],
                    ['cod' => 'c', 'text' => 'Debian'],
                    ['cod' => 'd', 'text' => 'Sql Server'],
                ],
            ],
            [
                'text' => 'Marque el Sistema Operativo que no pertenece a la Distribución Linux',
                'examen_id' => $id,
                'answer' => 'a',
                'correct_answer' => 'Mac Os',
                'category' => 'SISTEMAS OPERATIVOS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mac Os'],
                    ['cod' => 'b', 'text' => 'Ubuntu'],
                    ['cod' => 'c', 'text' => 'Debian'],
                    ['cod' => 'd', 'text' => 'Fedora'],
                ],
            ],            
        ];



        // $preguntas = [ 
        //     [
        //         'text' => 'Cuál es la función principal del núcleo (kernel) en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'd',
        //         'correct_answer' => 'Controlar todas las operaciones esenciales del sistema.',
        //         'category' => 'SISTEMAS OPERATIVOS',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Administrar los archivos del sistema.'],
        //             ['cod' => 'b', 'text' => 'Procesar datos en una interfaz gráfica.'],
        //             ['cod' => 'c', 'text' => 'Gestionar la comunicación entre dispositivos.'],
        //             ['cod' => 'd', 'text' => 'Controlar todas las operaciones esenciales del sistema.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'En qué consiste la separación entre espacios de usuario y el modo kernel?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Los programas en ejecución se dividen en dos espacios con diferentes niveles de privilegio.',
        //         'category' => 'SISTEMAS OPERATIVOS',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Los usuarios pueden ejecutar programas en el espacio de kernel.'],
        //             ['cod' => 'b', 'text' => 'El núcleo del sistema operativo opera en el espacio de usuario.'],
        //             ['cod' => 'c', 'text' => 'Los programas en ejecución se dividen en dos espacios con diferentes niveles de privilegio.'],
        //             ['cod' => 'd', 'text' => 'Solo los administradores pueden acceder al espacio de usuario.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué componente del sistema operativo se encarga de la creación, programación y terminación de procesos?',
        //         'examen_id' => $id,
        //         'answer' => 'd',
        //         'correct_answer' => 'Gestión de procesos.',
        //         'category' => 'SISTEMAS OPERATIVOS',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Gestión de memoria.'],
        //             ['cod' => 'b', 'text' => 'Sistema de archivos.'],
        //             ['cod' => 'c', 'text' => 'Interfaz de usuario.'],
        //             ['cod' => 'd', 'text' => 'Gestión de procesos.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es la función principal de la gestión de memoria en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Asignar y liberar espacio de memoria a los procesos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Decidir qué proceso se ejecutará a continuación.'],
        //             ['cod' => 'b', 'text' => 'Asignar y liberar espacio de memoria a los procesos'],
        //             ['cod' => 'c', 'text' => 'Gestionar la comunicación entre procesos.'],
        //             ['cod' => 'd', 'text' => 'Administrar la interacción con dispositivos de entrada/salida.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué componente del sistema operativo organiza y administra la información almacenada en el disco duro?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Sistema de archivos.',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Gestión de memoria.'],
        //             ['cod' => 'b', 'text' => 'Planificador de procesos.'],
        //             ['cod' => 'c', 'text' => 'Sistema de archivos.'],
        //             ['cod' => 'd', 'text' => 'Sistema de red'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Que software no se utiliza para gestionar una base de datos?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'SQL.',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'SQL YOG'],
        //             ['cod' => 'b', 'text' => 'XAMPP'],
        //             ['cod' => 'c', 'text' => 'SQL.'],
        //             ['cod' => 'd', 'text' => 'WORKBENCH'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de los siguientes estados de un proceso implica que el proceso está listo para ejecutarse pero aún no tiene la CPU?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Listo',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'En ejecución.'],
        //             ['cod' => 'b', 'text' => 'Listo'],
        //             ['cod' => 'c', 'text' => 'En espera.'],
        //             ['cod' => 'd', 'text' => 'Finalizado.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué ocurre durante un cambio de contexto en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'La CPU pasa de un proceso a otro',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Un proceso finaliza su ejecución.'],
        //             ['cod' => 'b', 'text' => 'La CPU pasa de un proceso a otro'],
        //             ['cod' => 'c', 'text' => 'Un proceso cambia su estado de "en espera" a "en ejecución".'],
        //             ['cod' => 'd', 'text' => 'Se libera espacio en memoria para otro proceso.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuáles son los elementos típicos que componen una imagen de proceso?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Código ejecutable, datos, pila, contador de programa y registros',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Teclado, monitor, mouse.'],
        //             ['cod' => 'b', 'text' => 'Programa, iconos, carpetas.'],
        //             ['cod' => 'c', 'text' => 'Código ejecutable, datos, pila, contador de programa y registros'],
        //             ['cod' => 'd', 'text' => 'Núcleo, memoria, disco duro.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué significa PCB en relación con la gestión de procesos?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Bloque de Control de Proceso',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Proceso Central de Base.'],
        //             ['cod' => 'b', 'text' => 'Bloque de Control de Proceso'],
        //             ['cod' => 'c', 'text' => 'Plataforma de Comunicación Binaria.'],
        //             ['cod' => 'd', 'text' => 'Proceso y Control de Backups.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de los siguientes no es un estado en el que puede estar un proceso?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'En modo kernel',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'En espera.'],
        //             ['cod' => 'b', 'text' => 'En modo kernel'],
        //             ['cod' => 'c', 'text' => 'Finalizado.'],
        //             ['cod' => 'd', 'text' => 'Listo.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué componente del sistema operativo se encarga de decidir cuál proceso se ejecutará a continuación?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Planificador de procesos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Sistema de archivos.'],
        //             ['cod' => 'b', 'text' => 'Planificador de procesos'],
        //             ['cod' => 'c', 'text' => 'Gestión de memoria.'],
        //             ['cod' => 'd', 'text' => 'Interfaz de usuario.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de los siguientes no es un beneficio de la interfaz de línea de comandos (CLI)?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Interfaz gráfica',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Automatización de tareas.'],
        //             ['cod' => 'b', 'text' => 'Mayor control sobre el sistema.'],
        //             ['cod' => 'c', 'text' => 'Interfaz gráfica'],
        //             ['cod' => 'd', 'text' => 'Eficiencia en la ejecución de comandos.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es la importancia de la sincronización entre procesos en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'a',
        //         'correct_answer' => 'Evitar conflictos y asegurar la integridad de los datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Evitar conflictos y asegurar la integridad de los datos'],
        //             ['cod' => 'b', 'text' => 'Realizar cambios de contexto de manera más rápida.'],
        //             ['cod' => 'c', 'text' => 'Aumentar la velocidad de la CPU.'],
        //             ['cod' => 'd', 'text' => 'Ejecutar procesos en paralelo sin restricciones.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué componente del sistema operativo se encarga de administrar la comunicación y el intercambio de datos entre dispositivos en una red?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Gestión de redes',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Sistema de archivos.'],
        //             ['cod' => 'b', 'text' => 'Planificador de procesos.'],
        //             ['cod' => 'c', 'text' => 'Gestión de redes'],
        //             ['cod' => 'd', 'text' => 'Sistema de entrada/salida.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué componente del sistema operativo asigna espacio de memoria a cada proceso y evita conflictos?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Gestión de memoria',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Sistema de archivos.'],
        //             ['cod' => 'b', 'text' => 'Gestión de memoria'],
        //             ['cod' => 'c', 'text' => 'Interfaz de usuario.'],
        //             ['cod' => 'd', 'text' => 'Planificador de procesos.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de los siguientes es un ejemplo de comando utilizado en una interfaz de línea de comandos (CLI) para listar el contenido de un directorio?',
        //         'examen_id' => $id,
        //         'answer' => 'a',
        //         'correct_answer' => 'ls (o dir en Windows)',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'ls (o dir en Windows)'],
        //             ['cod' => 'b', 'text' => 'open.'],
        //             ['cod' => 'c', 'text' => 'copy.'],
        //             ['cod' => 'd', 'text' => 'create.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es la función principal del sistema de archivos en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'c',
        //         'correct_answer' => 'Organizar y administrar la información almacenada en el disco duro',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Asignar memoria a los procesos.'],
        //             ['cod' => 'b', 'text' => 'Administrar la comunicación con dispositivos de entrada/salida.'],
        //             ['cod' => 'c', 'text' => 'Organizar y administrar la información almacenada en el disco duro'],
        //             ['cod' => 'd', 'text' => 'Controlar la ejecución de programas.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Qué tipo de interfaz permite a los usuarios interactuar con el sistema operativo mediante comandos de texto?',
        //         'examen_id' => $id,
        //         'answer' => 'b',
        //         'correct_answer' => 'Interfaz de línea de comandos (CLI)',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Interfaz gráfica de usuario (GUI).'],
        //             ['cod' => 'b', 'text' => 'Interfaz de línea de comandos (CLI)'],
        //             ['cod' => 'c', 'text' => 'Interfaz de usuario táctil.'],
        //             ['cod' => 'd', 'text' => 'Interfaz de usuario por voz.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es el objetivo principal de la programación de procesos en un sistema operativo?',
        //         'examen_id' => $id,
        //         'answer' => 'a',
        //         'correct_answer' => 'Decidir qué proceso se ejecutará y en qué momento',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Decidir qué proceso se ejecutará y en qué momento'],
        //             ['cod' => 'b', 'text' => 'Administrar la memoria del sistema.'],
        //             ['cod' => 'c', 'text' => 'Organizar la información almacenada en el disco duro.'],
        //             ['cod' => 'd', 'text' => 'Controlar la comunicación entre dispositivos de entrada/salida.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de los siguientes no es un estado en el que puede estar un proceso?',
        //         'examen_id' => $id,
        //         'answer' => 'a',
        //         'correct_answer' => 'Listo para ejecutarse',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Listo para ejecutarse'],
        //             ['cod' => 'b', 'text' => 'En espera.'],
        //             ['cod' => 'c', 'text' => 'En ejecución.'],
        //             ['cod' => 'd', 'text' => 'Finalizado.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es la función principal del núcleo (kernel) en un sistema operativo?',
        //         'examen_id' => $id2,
        //         'answer' => 'd',
        //         'correct_answer' => 'Controlar todas las operaciones esenciales del sistema.',
        //         'category' => 'SISTEMAS OPERATIVOS',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Administrar los archivos del sistema.'],
        //             ['cod' => 'b', 'text' => 'Procesar datos en una interfaz gráfica.'],
        //             ['cod' => 'c', 'text' => 'Gestionar la comunicación entre dispositivos.'],
        //             ['cod' => 'd', 'text' => 'Controlar todas las operaciones esenciales del sistema.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un compilador en el contexto de lenguajes de programación?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Un programa que traduce código fuente a lenguaje de máquina.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Un intérprete.'],
        //             ['cod' => 'b', 'text' => 'Un programa que traduce código fuente a lenguaje de máquina.'],
        //             ['cod' => 'c', 'text' => 'Un depurador.'],
        //             ['cod' => 'd', 'text' => 'Una biblioteca estándar.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál de las siguientes opciones describe mejor el proceso de compilación?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.'],
        //             ['cod' => 'b', 'text' => 'Ejecución directa del código fuente.'],
        //             ['cod' => 'c', 'text' => 'Transformación del código fuente en un documento PDF.'],
        //             ['cod' => 'd', 'text' => 'Conversión del código fuente en imágenes.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una ventaja de los lenguajes compilados en comparación con los interpretados?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Mayor eficiencia en términos de rendimiento.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
        //             ['cod' => 'b', 'text' => 'Facilidad de desarrollo.'],
        //             ['cod' => 'c', 'text' => 'Mayor eficiencia en términos de rendimiento.'],
        //             ['cod' => 'd', 'text' => 'Menos propensión a errores.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una característica clave de los lenguajes interpretados?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Mayor portabilidad.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
        //             ['cod' => 'b', 'text' => 'Mayor optimización.'],
        //             ['cod' => 'c', 'text' => 'Menor uso de recursos.'],
        //             ['cod' => 'd', 'text' => 'Compilación previa.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es la JVM en el contexto de Java?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Una máquina virtual que interpreta el bytecode de Java.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Una biblioteca de música.'],
        //             ['cod' => 'b', 'text' => 'Una máquina virtual que interpreta el bytecode de Java.'],
        //             ['cod' => 'c', 'text' => 'Un compilador de C++.'],
        //             ['cod' => 'd', 'text' => 'Un entorno de desarrollo integrado.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es una característica distintiva de las metodologías ágiles?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Entregas frecuentes y adaptación continua.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Enfoque en la planificación detallada.'],
        //             ['cod' => 'b', 'text' => 'Uso de la cascada como modelo principal.'],
        //             ['cod' => 'c', 'text' => 'Entregas frecuentes y adaptación continua.'],
        //             ['cod' => 'd', 'text' => 'Énfasis en la documentación exhaustiva.'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cuál es una ventaja de las metodologías ágiles en comparación con las tradicionales?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Adaptación más rápida a cambios en los requisitos.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
        //             ['cod' => 'b', 'text' => 'Adaptación más rápida a cambios en los requisitos.'],
        //             ['cod' => 'c', 'text' => 'Menor necesidad de colaboración con los usuarios.'],
        //             ['cod' => 'd', 'text' => 'Menor comunicación con el equipo de desarrollo.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué implica el modelo en cascada en el desarrollo de software?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Fases secuenciales de desarrollo, donde cada fase debe completarse antes de la siguiente.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Fases secuenciales de desarrollo, donde cada fase debe completarse antes de la siguiente.'],
        //             ['cod' => 'b', 'text' => 'Entregas frecuentes de incrementos del producto.'],
        //             ['cod' => 'c', 'text' => 'Desarrollo iterativo con enfoque en la retroalimentación constante.'],
        //             ['cod' => 'd', 'text' => 'Uso exclusivo de técnicas de orientación a objetos.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué significa la sigla XP en el contexto de metodologías de desarrollo?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Extreme Programming.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Extreme Programming.'],
        //             ['cod' => 'b', 'text' => 'Extra Productivity.'],
        //             ['cod' => 'c', 'text' => 'Excellent Planning.'],
        //             ['cod' => 'd', 'text' => 'Efficient Progression.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué implica la metodología DevOps en el desarrollo de software?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Integración de desarrollo y operaciones para mejorar la calidad y la velocidad.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Integración de desarrollo y operaciones para mejorar la calidad y la velocidad.'],
        //             ['cod' => 'b', 'text' => 'Enfoque exclusivo en la planificación de proyectos.'],
        //             ['cod' => 'c', 'text' => 'Ignorar la automatización de procesos.'],
        //             ['cod' => 'd', 'text' => 'Uso de modelos en cascada.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿En qué se enfoca el modelo en V en comparación con el modelo en cascada?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Correspondencia entre fases de desarrollo y pruebas.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Desarrollo en ciclos iterativos.'],
        //             ['cod' => 'b', 'text' => 'Correspondencia entre fases de desarrollo y pruebas.'],
        //             ['cod' => 'c', 'text' => 'Entregas frecuentes en sprints.'],
        //             ['cod' => 'd', 'text' => 'Uso exclusivo de técnicas de orientación a objetos.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una característica clave de los lenguajes compilados?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Eficiencia en tiempo de ejecución.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Portabilidad.'],
        //             ['cod' => 'b', 'text' => 'Facilidad de depuración.'],
        //             ['cod' => 'c', 'text' => 'Eficiencia en tiempo de ejecución.'],
        //             ['cod' => 'd', 'text' => 'Mayor flexibilidad.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál de las siguientes opciones describe mejor el proceso de compilación?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.'],
        //             ['cod' => 'b', 'text' => 'Ejecución directa del código fuente.'],
        //             ['cod' => 'c', 'text' => 'Transformación del código fuente en un documento PDF.'],
        //             ['cod' => 'd', 'text' => 'Conversión del código fuente en imágenes.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué define al enfoque Scrum en el desarrollo de software?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Ciclos de desarrollo llamados "sprints".',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Ciclos de desarrollo llamados "sprints".'],
        //             ['cod' => 'b', 'text' => 'Priorización exclusiva del diseño.'],
        //             ['cod' => 'c', 'text' => 'Uso exclusivo de programación en parejas.'],
        //             ['cod' => 'd', 'text' => 'Ausencia de iteraciones.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una ventaja de las metodologías ágiles en comparación con las tradicionales?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Adaptación más rápida a cambios en los requisitos.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
        //             ['cod' => 'b', 'text' => 'Adaptación más rápida a cambios en los requisitos.'],
        //             ['cod' => 'c', 'text' => 'Menor necesidad de colaboración con los usuarios.'],
        //             ['cod' => 'd', 'text' => 'Menor comunicación con el equipo de desarrollo.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿En qué se enfoca la metodología Kanban?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Visualización del flujo de trabajo y gestión de tareas.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Visualización del flujo de trabajo y gestión de tareas.'],
        //             ['cod' => 'b', 'text' => 'Entregas frecuentes en ciclos llamados sprints.'],
        //             ['cod' => 'c', 'text' => 'Planificación detallada y exhaustiva.'],
        //             ['cod' => 'd', 'text' => 'Uso de modelos en cascada exclusivamente.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una característica clave de las metodologías iterativas e incrementales?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Desarrollo en ciclos repetitivos que producen incrementos funcionales.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Desarrollo en ciclos repetitivos que producen incrementos funcionales.'],
        //             ['cod' => 'b', 'text' => 'Enfoque en la entrega en un único ciclo largo.'],
        //             ['cod' => 'c', 'text' => 'Ignorar la retroalimentación del cliente.'],
        //             ['cod' => 'd', 'text' => 'Mayor énfasis en la documentación que en el código.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué beneficio principal ofrece Lean Development en el desarrollo de software?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Eliminación del desperdicio y maximización del valor entregado al cliente.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
        //             ['cod' => 'b', 'text' => 'Eliminación del desperdicio y maximización del valor entregado al cliente.'],
        //             ['cod' => 'c', 'text' => 'Mayor énfasis en la planificación detallada.'],
        //             ['cod' => 'd', 'text' => 'Uso exclusivo de metodologías ágiles.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué factor influye en la elección de una metodología de desarrollo de software?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Naturaleza del proyecto, experiencia del equipo y requisitos del proyecto.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Naturaleza del proyecto, experiencia del equipo y requisitos del proyecto.'],
        //             ['cod' => 'b', 'text' => 'Tamaño del equipo exclusivamente.'],
        //             ['cod' => 'c', 'text' => 'Preferencia personal del líder del proyecto.'],
        //             ['cod' => 'd', 'text' => 'Disponibilidad de recursos financieros.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una desventaja general de las metodologías ágiles?',
        //         'examen_id' => $id2,
        //         'answer' => 'b',
        //         'correct_answer' => 'Puede haber resistencia al cambio por parte del equipo.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor adaptabilidad a cambios.'],
        //             ['cod' => 'b', 'text' => 'Puede haber resistencia al cambio por parte del equipo.'],
        //             ['cod' => 'c', 'text' => 'Mayor énfasis en la documentación.'],
        //             ['cod' => 'd', 'text' => 'Requiere una planificación detallada.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un beneficio común de las metodologías iterativas e incrementales?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Entrega temprana de funcionalidad y adaptación continua.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Entrega temprana de funcionalidad y adaptación continua.'],
        //             ['cod' => 'b', 'text' => 'Mayor énfasis en la planificación detallada.'],
        //             ['cod' => 'c', 'text' => 'Menor énfasis en la retroalimentación del cliente.'],
        //             ['cod' => 'd', 'text' => 'Requiere menos comunicación con los usuarios.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un desafío general de las metodologías ágiles?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Requiere un cambio cultural y ajuste en la forma de trabajar.',
        //         'category' => 'METODOLOGÍAS DE DESARROLLO',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Adaptación continua a cambios.'],
        //             ['cod' => 'b', 'text' => 'Mayor eficiencia en el desarrollo.'],
        //             ['cod' => 'c', 'text' => 'Requiere un cambio cultural y ajuste en la forma de trabajar.'],
        //             ['cod' => 'd', 'text' => 'Menor participación del equipo en la toma de decisiones.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál de las siguientes opciones describe mejor un lenguaje compilado?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Se traduce completamente a lenguaje de máquina antes de la ejecución.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Se ejecuta línea por línea.'],
        //             ['cod' => 'b', 'text' => 'Utiliza una máquina virtual.'],
        //             ['cod' => 'c', 'text' => 'Se traduce completamente a lenguaje de máquina antes de la ejecución.'],
        //             ['cod' => 'd', 'text' => 'Requiere un intérprete en tiempo real.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un ejemplo de un lenguaje de programación compilado?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'C++.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Python.'],
        //             ['cod' => 'b', 'text' => 'Ruby.'],
        //             ['cod' => 'c', 'text' => 'C++.'],
        //             ['cod' => 'd', 'text' => 'JavaScript.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es una ventaja clave de los lenguajes compilados en comparación con los interpretados?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Mayor eficiencia en tiempo de ejecución.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
        //             ['cod' => 'b', 'text' => 'Facilidad de depuración.'],
        //             ['cod' => 'c', 'text' => 'Mayor eficiencia en tiempo de ejecución.'],
        //             ['cod' => 'd', 'text' => 'Mayor flexibilidad de sintaxis.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es un ejemplo de un lenguaje de programación interpretado?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Python.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Python.'],
        //             ['cod' => 'b', 'text' => 'Java.'],
        //             ['cod' => 'c', 'text' => 'C++.'],
        //             ['cod' => 'd', 'text' => 'C#.'],
        //         ]
        //     ],

        //     [
        //         'text' => '¿Cuál es una característica de los lenguajes interpretados?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Mayor portabilidad.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
        //             ['cod' => 'b', 'text' => 'Mayor eficiencia en tiempo de ejecución.'],
        //             ['cod' => 'c', 'text' => 'Necesidad de compilación previa.'],
        //             ['cod' => 'd', 'text' => 'Mayor velocidad de ejecución.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un ejemplo de un lenguaje de programación orientado a objetos?',
        //         'examen_id' => $id2,
        //         'answer' => 'c',
        //         'correct_answer' => 'Java.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'C.'],
        //             ['cod' => 'b', 'text' => 'Fortran.'],
        //             ['cod' => 'c', 'text' => 'Java.'],
        //             ['cod' => 'd', 'text' => 'Ruby.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál de las siguientes opciones describe mejor la compilación en tiempo de ejecución?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'El código fuente se compila en lenguaje de máquina durante la ejecución del programa.',
        //         'category' => 'LENGUAJES DE PROGRAMACIÓN',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'El código fuente se compila en lenguaje de máquina durante la ejecución del programa.'],
        //             ['cod' => 'b', 'text' => 'La compilación se realiza antes de la ejecución y genera un archivo ejecutable.'],
        //             ['cod' => 'c', 'text' => 'No es necesario compilar el código fuente en lenguaje de máquina.'],
        //             ['cod' => 'd', 'text' => 'La compilación se realiza en una etapa de preprocesamiento.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué es un IDE en el contexto de la programación?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Un Entorno de Desarrollo Integrado que proporciona herramientas para escribir, depurar y ejecutar código.',
        //         'category' => 'DESARROLLO DE SOFTWARE',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Un Entorno de Desarrollo Integrado que proporciona herramientas para escribir, depurar y ejecutar código.'],
        //             ['cod' => 'b', 'text' => 'Una interfaz de usuario gráfica.'],
        //             ['cod' => 'c', 'text' => 'Un lenguaje de programación.'],
        //             ['cod' => 'd', 'text' => 'Un compilador.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es uno de los beneficios de usar un IDE?',
        //         'examen_id' => $id2,
        //         'answer' => 'a',
        //         'correct_answer' => 'Facilita la escritura de código con funciones de autocompletado y resaltado de sintaxis.',
        //         'category' => 'DESARROLLO DE SOFTWARE',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Facilita la escritura de código con funciones de autocompletado y resaltado de sintaxis.'],
        //             ['cod' => 'b', 'text' => 'Reduce la necesidad de pruebas de código.'],
        //             ['cod' => 'c', 'text' => 'Aumenta la velocidad de ejecución del programa.'],
        //             ['cod' => 'd', 'text' => 'Simplifica la gestión de bases de datos.'],
        //         ]
        //     ],

        //     //-------------------------------------//
        //     [
        //         'text' => '¿Qué significa ASN.1 en el contexto de la Capa de Enlace de Datos?',
        //         'examen_id' => $id3,
        //         'answer' => 'b',
        //         'correct_answer' => 'Abstract Syntax Notation One (Notación Sintáctica Abstracta Uno)',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Análisis de Sistemas de Red'],
        //             ['cod' => 'b', 'text' => 'Abstract Syntax Notation One (Notación Sintáctica Abstracta Uno)'],
        //             ['cod' => 'c', 'text' => 'Advanced Security Network'],
        //             ['cod' => 'd', 'text' => 'Application System Network'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál de los siguientes NO es un tipo de datos en ASN.1?',
        //         'examen_id' => $id3,
        //         'answer' => 'c',
        //         'correct_answer' => 'FLOAT',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'INTEGER'],
        //             ['cod' => 'b', 'text' => 'BOOLEAN'],
        //             ['cod' => 'c', 'text' => 'FLOAT'],
        //             ['cod' => 'd', 'text' => 'OCTET STRING'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué función tiene la codificación BER en la Capa de Enlace de Datos?',
        //         'examen_id' => $id3,
        //         'answer' => 'c',
        //         'correct_answer' => 'Codificar y decodificar datos ASN.1 para su transmisión',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Generar códigos de barras'],
        //             ['cod' => 'b', 'text' => 'Enviar mensajes de correo electrónico'],
        //             ['cod' => 'c', 'text' => 'Codificar y decodificar datos ASN.1 para su transmisión'],
        //             ['cod' => 'd', 'text' => 'Realizar operaciones matemáticas en los datos'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Cuál es uno de los beneficios de la codificación BER en la comunicación de redes?',
        //         'examen_id' => $id3,
        //         'answer' => 'b',
        //         'correct_answer' => 'Garantiza la interpretación precisa de los datos independientemente de la plataforma',
        //         'category' => 'Modelo OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Incrementa la complejidad de los datos'],
        //             ['cod' => 'b', 'text' => 'Garantiza la interpretación precisa de los datos independientemente de la plataforma'],
        //             ['cod' => 'c', 'text' => 'Reduce la eficiencia de la transmisión de datos'],
        //             ['cod' => 'd', 'text' => 'Limita la compatibilidad entre sistemas'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué se entiende por "identificador de tipo" en la codificación BER?',
        //         'examen_id' => $id3,
        //         'answer' => 'c',
        //         'correct_answer' => 'Un número único que identifica el tipo de datos ASN.1',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'El nombre del protocolo utilizado'],
        //             ['cod' => 'b', 'text' => 'El número de puerto en el que se envían los datos'],
        //             ['cod' => 'c', 'text' => 'Un número único que identifica el tipo de datos ASN.1'],
        //             ['cod' => 'd', 'text' => 'El código de país del dispositivo de origen'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué tipo de datos en ASN.1 representa valores verdadero o falso?',
        //         'examen_id' => $id3,
        //         'answer' => 'b',
        //         'correct_answer' => 'BOOLEAN',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'INTEGER'],
        //             ['cod' => 'b', 'text' => 'BOOLEAN'],
        //             ['cod' => 'c', 'text' => 'OCTET STRING'],
        //             ['cod' => 'd', 'text' => 'IA5String'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué función tiene la Capa de Enlace de Datos en el Modelo OSI?',
        //         'examen_id' => $id3,
        //         'answer' => 'a',
        //         'correct_answer' => 'Transmitir datos de manera confiable entre dispositivos directamente conectados.',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Transmitir datos de manera confiable entre dispositivos directamente conectados.'],
        //             ['cod' => 'b', 'text' => 'Encriptar todos los datos en la red'],
        //             ['cod' => 'c', 'text' => 'Determinar la ruta óptima para la transmisión de datos'],
        //             ['cod' => 'd', 'text' => 'Traducir direcciones IP en direcciones MAC.'],
        //         ]
        //     ],
        //     [
        //         'text' => '¿Qué tipo de datos en ASN.1 representa cadenas de caracteres ASCII?',
        //         'examen_id' => $id3,
        //         'answer' => 'd',
        //         'correct_answer' => 'IA5String',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'INTEGER'],
        //             ['cod' => 'b', 'text' => 'BOOLEAN'],
        //             ['cod' => 'c', 'text' => 'OCTET STRING'],
        //             ['cod' => 'd', 'text' => 'IA5String'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Cual de los siguientes no es una capa del modelo OSI',
        //         'examen_id' => $id3,
        //         'answer' => 'd',
        //         'correct_answer' => 'AUTENTICACION',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'APLICACION'],
        //             ['cod' => 'b', 'text' => 'PRESENTACION'],
        //             ['cod' => 'c', 'text' => 'FISICO'],
        //             ['cod' => 'd', 'text' => 'AUTENTICACION'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Esta capa se ocupa de la transmisión de señales físicas a través de medios de comunicación como cables y ondas de radio.',
        //         'examen_id' => $id3,
        //         'answer' => 'c',
        //         'correct_answer' => 'FISICO',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'APLICACION'],
        //             ['cod' => 'b', 'text' => 'PRESENTACION'],
        //             ['cod' => 'c', 'text' => 'FISICO'],
        //             ['cod' => 'd', 'text' => 'AUTENTICACION'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Se centra en el enrutamiento de datos entre redes y determina la ruta que deben seguir los paquetes de datos para llegar a su destino',
        //         'examen_id' => $id3,
        //         'answer' => 'd',
        //         'correct_answer' => 'RED',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'APLICACION'],
        //             ['cod' => 'b', 'text' => 'PRESENTACION'],
        //             ['cod' => 'c', 'text' => 'FISICO'],
        //             ['cod' => 'd', 'text' => 'RED'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Esta capa es responsable de la transferencia de datos extremo a extremo y asegura que los datos se entreguen de manera confiable y en el orden correcto. También maneja el control de flujo y la detección de errores.',
        //         'examen_id' => $id3,
        //         'answer' => 'b',
        //         'correct_answer' => 'TRANSPORTE',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'APLICACION'],
        //             ['cod' => 'b', 'text' => 'TRANSPORTE'],
        //             ['cod' => 'c', 'text' => 'FISICO'],
        //             ['cod' => 'd', 'text' => 'RED'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Establece, administra y finaliza las conexiones entre aplicaciones en dispositivos remotos. Controla el diálogo y la sincronización entre los procesos de las aplicaciones.',
        //         'examen_id' => $id3,
        //         'answer' => 'd',
        //         'correct_answer' => 'CAPA DE SESSION',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
        //             ['cod' => 'b', 'text' => 'CAPA DE TRANSPORTE'],
        //             ['cod' => 'c', 'text' => 'CAPA FISICO'],
        //             ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
        //         ]
        //     ],
        //     [
        //         'text' => 'se encarga de la traducción, compresión y encriptación de los datos para garantizar que puedan ser entendidos por las aplicaciones en ambos extremos de la comunicación.',
        //         'examen_id' => $id3,
        //         'answer' => 'b',
        //         'correct_answer' => 'CAPA DE PRESENTACION',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
        //             ['cod' => 'b', 'text' => 'CAPA DE PRESENTACION'],
        //             ['cod' => 'c', 'text' => 'CAPA FISICO'],
        //             ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
        //         ]
        //     ],
        //     [
        //         'text' => 'Es la capa más cercana al usuario final y proporciona servicios de red directamente utilizados por las aplicaciones.',
        //         'examen_id' => $id3,
        //         'answer' => 'a',
        //         'correct_answer' => 'CAPA DE APLICACION',
        //         'category' => 'MODELO OSI',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
        //             ['cod' => 'b', 'text' => 'CAPA DE PRESENTACION'],
        //             ['cod' => 'c', 'text' => 'CAPA FISICO'],
        //             ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
        //         ]
        //     ],
        //     //MEDIOCURSOS 
        //     [
        //         'text' => 'QUE SIGNIFICA DDL',
        //         'examen_id' => $id4,
        //         'answer' => 'a',
        //         'correct_answer' => 'Data Definition Language',
        //         'category' => 'base de datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Data Definition Language'],
        //             ['cod' => 'b', 'text' => 'Data Define Language'],
        //             ['cod' => 'c', 'text' => 'Lenguaje de Manipulacion de Datos'],
        //             ['cod' => 'd', 'text' => 'Estructured Query Language'],
        //         ]
        //     ],
        //     [
        //         'text' => 'DQL',
        //         'examen_id' => $id4,
        //         'answer' => 'a',
        //         'correct_answer' => 'Lenguaje de Consulta de Datos',
        //         'category' => 'base de datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Lenguaje de Consulta de Datos'],
        //             ['cod' => 'b', 'text' => 'Lenguaje de Manipulacion de Datos'],
        //             ['cod' => 'c', 'text' => 'Lenguaje de Definicion de Datos'],
        //             ['cod' => 'd', 'text' => 'Lenguaje de Control de Datos'],
        //         ]
        //     ],
        //     [
        //         'text' => 'DML',
        //         'examen_id' => $id4,
        //         'answer' => 'b',
        //         'correct_answer' => 'Lenguaje de Manipulacion de Datos',
        //         'category' => 'base de datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Lenguaje de Definicion de Datos'],
        //             ['cod' => 'b', 'text' => 'Lenguaje de Manipulacion de Datos'],
        //             ['cod' => 'c', 'text' => 'Lenguaje de Definicion de Datos'],
        //             ['cod' => 'd', 'text' => 'Lenguaje de Consulta de Datos'],
        //         ]
        //     ],
        //     [
        //         'text' => 'DCL',
        //         'examen_id' => $id4,
        //         'answer' => 'd',
        //         'correct_answer' => 'Lenguaje de Control de Datos',
        //         'category' => 'base de datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'Lenguaje de Consulta de Datos'],
        //             ['cod' => 'b', 'text' => 'Lenguaje de Manipulacion de Datos'],
        //             ['cod' => 'c', 'text' => 'Lenguaje de Definicion de Datos'],
        //             ['cod' => 'd', 'text' => 'Lenguaje de Control de Datos'],
        //         ]
        //     ],
        //     [
        //         'text' => 'LENGUAJE ESTRUCTURADO DE CONSULTAS',
        //         'examen_id' => $id4,
        //         'answer' => 'd',
        //         'correct_answer' => 'SQL',
        //         'category' => 'base de datos',
        //         'alternativas' => [
        //             ['cod' => 'a', 'text' => 'DDL'],
        //             ['cod' => 'b', 'text' => 'DML'],
        //             ['cod' => 'c', 'text' => 'DCL'],
        //             ['cod' => 'd', 'text' => 'SQL'],
        //         ]
        //     ],            
        // ];
        foreach ($preguntas as $menuData) {
            $pregunta = Pregunta::firstOrCreate([
                'text' => $menuData['text'], 
                'correct_answer' => $menuData['correct_answer'], 
                'examen_id' => $menuData['examen_id'], 
                'answer' => $menuData['answer'],
            ]);
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
