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
        $id2= Examen::where('titulo', 'EXAMEN DE MEDIO CURSO DE PRODUCCION AUDIOVISUAL')->value('id');
        $idemcbd= Examen::where('titulo', 'EXAMEN DE MEDIO CURSO SOFTWARE EN LA ADMINISTRACION DE BASE DE DATOS')->value('id');
        $idemcredes= Examen::where('titulo', 'EXAMEN DE MEDIO CURSO HERRAMIENTAS DE GESTION DE REDES')->value('id');
        //sistemas operativos
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
                    ['cod' => 'd', 'text' => 'Finalizado.'],//reparar
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

        //produccion audiovisual
        $preguntas2=[
            [
                'text' => '¿Qué es la producción audiovisual?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Un proceso de creación de contenido multimedia.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Un género de películas.'],
                    ['cod' => 'b', 'text' => 'Un proceso de creación de contenido multimedia.'],
                    ['cod' => 'c', 'text' => 'Un estilo de narración escrita.'],
                    ['cod' => 'd', 'text' => 'Una técnica de edición de imágenes.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes roles es responsable de la gestión financiera y logística de la producción?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Productor.',
                'category' => 'PRODUCCIÓN CINEMATOGRÁFICA',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Guionista.'],
                    ['cod' => 'b', 'text' => 'Director de Fotografía.'],
                    ['cod' => 'c', 'text' => 'Productor.'],
                    ['cod' => 'd', 'text' => 'Editor.'],
                ]
            ],
            [
                'text' => 'En qué fase de la producción se seleccionan locaciones, diseñan escenarios y se realiza el casting?',
                'examen_id' => $id2,
                'answer' => 'a',
                'correct_answer' => 'Preproducción.',
                'category' => 'PRODUCCIÓN CINEMATOGRÁFICA',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Preproducción.'],
                    ['cod' => 'b', 'text' => 'Posproducción.'],
                    ['cod' => 'c', 'text' => 'Producción.'],
                    ['cod' => 'd', 'text' => 'Distribución.'],
                ]
            ],
            [
                'text' => '¿Qué función desempeña el director de fotografía en la producción audiovisual?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Composición visual y cinematografía.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Gestión financiera.'],
                    ['cod' => 'b', 'text' => 'Composición visual y cinematografía.'],
                    ['cod' => 'c', 'text' => 'Montaje y edición.'],
                    ['cod' => 'd', 'text' => 'Creación de efectos especiales.'],
                ]
            ],
            [
                'text' => 'Cuál es uno de los géneros audiovisuales que se centra en elementos futuristas y tecnológicos?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Ciencia Ficción.',
                'category' => 'GÉNEROS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Comedia.'],
                    ['cod' => 'b', 'text' => 'Drama.'],
                    ['cod' => 'c', 'text' => 'Ciencia Ficción.'],
                    ['cod' => 'd', 'text' => 'Fantasía.'],
                ]
            ],
            [
                'text' => 'Qué formato implica la proyección de películas en salas de cine?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Cine.',
                'category' => 'FORMATOS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Televisión.'],
                    ['cod' => 'b', 'text' => 'Publicidad.'],
                    ['cod' => 'c', 'text' => 'Cine.'],
                    ['cod' => 'd', 'text' => 'Streaming.'],
                ]
            ],
            [
                'text' => 'Cuál es una de las fases de la producción audiovisual que implica la edición de video y diseño de sonido?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Posproducción.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Desarrollo.'],
                    ['cod' => 'b', 'text' => 'Preproducción.'],
                    ['cod' => 'c', 'text' => 'Posproducción.'],
                    ['cod' => 'd', 'text' => 'Producción.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes miembros de la producción es responsable de la creación del guion?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Guionista.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Director.'],
                    ['cod' => 'b', 'text' => 'Productor.'],
                    ['cod' => 'c', 'text' => 'Guionista.'],
                    ['cod' => 'd', 'text' => 'Editor.'],
                ]
            ],
            [
                'text' => '¿Qué género audiovisual se enfoca en explorar emociones humanas y situaciones conmovedoras?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Drama.',
                'category' => 'GÉNEROS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Comedia.'],
                    ['cod' => 'b', 'text' => 'Drama.'],
                    ['cod' => 'c', 'text' => 'Acción.'],
                    ['cod' => 'd', 'text' => 'Ciencia Ficción.'],
                ]
            ],
            [
                'text' => 'En qué etapa de la producción se promociona y lanza el contenido a través de diversos canales?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Distribución.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Desarrollo.'],
                    ['cod' => 'b', 'text' => 'Preproducción.'],
                    ['cod' => 'c', 'text' => 'Distribución.'],
                    ['cod' => 'd', 'text' => 'Posproducción.'],
                ]
            ],
            [
                'text' => '¿Qué tipo de contenido audiovisual utiliza dibujos o modelos para crear personajes y escenarios?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Animación.',
                'category' => 'FORMATOS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Cine.'],
                    ['cod' => 'b', 'text' => 'Televisión.'],
                    ['cod' => 'c', 'text' => 'Animación.'],
                    ['cod' => 'd', 'text' => 'Realidad Virtual (RV).'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes roles se encarga de capturar y crear la mezcla de audio?',
                'examen_id' => $id2,
                'answer' => 'a',
                'correct_answer' => 'Sonidista.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Sonidista.'],
                    ['cod' => 'b', 'text' => 'Maquillador y Estilista.'],
                    ['cod' => 'c', 'text' => 'Director de Fotografía.'],
                    ['cod' => 'd', 'text' => 'Diseñador de Producción.'],
                ]
            ],
            [
                'text' => '¿Cuál es la importancia de la producción audiovisual en la sociedad?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Puede educar, informar, entretener y persuadir a las audiencias.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'No tiene ningún impacto significativo.'],
                    ['cod' => 'b', 'text' => 'Solo entretiene a las audiencias.'],
                    ['cod' => 'c', 'text' => 'Puede educar, informar, entretener y persuadir a las audiencias.'],
                    ['cod' => 'd', 'text' => 'Solo afecta la economía.'],
                ]
            ],
            [
                'text' => '¿En qué género audiovisual es común encontrar elementos mágicos o sobrenaturales en entornos imaginarios?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Fantasía.',
                'category' => 'GÉNEROS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Documental.'],
                    ['cod' => 'b', 'text' => 'Ciencia Ficción.'],
                    ['cod' => 'c', 'text' => 'Fantasía.'],
                    ['cod' => 'd', 'text' => 'Thriller.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes formatos se refiere a contenido disponible en línea a través de plataformas como Netflix?',
                'examen_id' => $id2,
                'answer' => 'd',
                'correct_answer' => 'Plataformas de Streaming.',
                'category' => 'FORMATOS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Cine.'],
                    ['cod' => 'b', 'text' => 'Televisión.'],
                    ['cod' => 'c', 'text' => 'Publicidad.'],
                    ['cod' => 'd', 'text' => 'Plataformas de Streaming.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes fases de producción implica la filmación del contenido según el guion y la planificación?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Producción.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Desarrollo.'],
                    ['cod' => 'b', 'text' => 'Preproducción.'],
                    ['cod' => 'c', 'text' => 'Producción.'],
                    ['cod' => 'd', 'text' => 'Posproducción.'],
                ]
            ],
            [
                'text' => '¿Qué género audiovisual presenta hechos, eventos o temas de la vida real de manera objetiva?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Documental.',
                'category' => 'GÉNEROS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Comedia.'],
                    ['cod' => 'b', 'text' => 'Drama.'],
                    ['cod' => 'c', 'text' => 'Documental.'],
                    ['cod' => 'd', 'text' => 'Animación.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes miembros de la producción se encarga de la apariencia de los actores y la coherencia visual?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Maquillador y Estilista.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Director.'],
                    ['cod' => 'b', 'text' => 'Diseñador de Producción.'],
                    ['cod' => 'c', 'text' => 'Maquillador y Estilista.'],
                    ['cod' => 'd', 'text' => 'Editor.'],
                ]
            ],
            [
                'text' => '¿Qué género audiovisual se caracteriza por sus escenas emocionantes y llenas de adrenalina?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Acción.',
                'category' => 'GÉNEROS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Comedia.'],
                    ['cod' => 'b', 'text' => 'Drama.'],
                    ['cod' => 'c', 'text' => 'Acción.'],
                    ['cod' => 'd', 'text' => 'Fantasía.'],
                ]
            ],
            [
                'text' => '¿En qué formato se presentan anuncios de corta duración para promocionar productos o servicios?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Publicidad.',
                'category' => 'FORMATOS AUDIOVISUALES',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Televisión.'],
                    ['cod' => 'b', 'text' => 'Cine.'],
                    ['cod' => 'c', 'text' => 'Publicidad.'],
                    ['cod' => 'd', 'text' => 'Streaming.'],
                ]
            ],
            [
                'text' => '¿Cuál es el significado de la palabra "cine"?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Movimiento.',
                'category' => 'CINE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Proyección visual.'],
                    ['cod' => 'b', 'text' => 'Medio de comunicación.'],
                    ['cod' => 'c', 'text' => 'Movimiento.'],
                    ['cod' => 'd', 'text' => 'Teatro.'],
                ]
            ],
            [
                'text' => '¿Quiénes fueron los pioneros en presentar públicamente el cine en 1895?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Los hermanos Lumière.',
                'category' => 'CINE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Thomas Edison y Nikola Tesla.'],
                    ['cod' => 'b', 'text' => 'Los hermanos Lumière.'],
                    ['cod' => 'c', 'text' => 'Guglielmo Marconi y Alexander Graham Bell.'],
                    ['cod' => 'd', 'text' => 'Eadweard Muybridge y George Eastman.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes es un aspecto técnico clave de la radio?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Frecuencias y bandas.',
                'category' => 'RADIO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Maquillaje y vestuario.'],
                    ['cod' => 'b', 'text' => 'Equipos de edición de video.'],
                    ['cod' => 'c', 'text' => 'Frecuencias y bandas.'],
                    ['cod' => 'd', 'text' => 'Micrófonos y cámaras.'],
                ]
            ],
            [
                'text' => '¿Cuál fue uno de los avances tecnológicos que permitió la transmisión transatlántica de radio?',
                'examen_id' => $id2,
                'answer' => 'd',
                'correct_answer' => 'Telegrafía inalámbrica.',
                'category' => 'RADIO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Teléfono.'],
                    ['cod' => 'b', 'text' => 'Telégrafo.'],
                    ['cod' => 'c', 'text' => 'Radiotelégrafo.'],
                    ['cod' => 'd', 'text' => 'Telegrafía inalámbrica.'],
                ]
            ],
            [
                'text' => '¿En qué década se introdujo la radio FM, mejorando la calidad de sonido y cobertura?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Década de 1930.',
                'category' => 'RADIO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Década de 1910.'],
                    ['cod' => 'b', 'text' => 'Década de 1930.'],
                    ['cod' => 'c', 'text' => 'Década de 1950.'],
                    ['cod' => 'd', 'text' => 'Década de 1960.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes bandas no se usa en la radio?',
                'examen_id' => $id2,
                'answer' => 'd',
                'correct_answer' => 'SW.',
                'category' => 'RADIO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'AM.'],
                    ['cod' => 'b', 'text' => 'FM.'],
                    ['cod' => 'c', 'text' => 'PM.'],
                    ['cod' => 'd', 'text' => 'SW.'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes géneros cinematográficos se enfoca en situaciones conmovedoras y emociones humanas?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Drama.',
                'category' => 'CINE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Comedia.'],
                    ['cod' => 'b', 'text' => 'Drama.'],
                    ['cod' => 'c', 'text' => 'Acción.'],
                    ['cod' => 'd', 'text' => 'Ciencia Ficción.'],
                ]
            ],
            [
                'text' => '¿Qué formato cinematográfico utiliza cámaras digitales en lugar de película tradicional?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Digital.',
                'category' => 'CINE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => '35mm.'],
                    ['cod' => 'b', 'text' => 'IMAX.'],
                    ['cod' => 'c', 'text' => 'Digital.'],
                    ['cod' => 'd', 'text' => '3D.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes fases de la producción audiovisual implica el diseño de escenarios y selección de locaciones?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Preproducción.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Producción.'],
                    ['cod' => 'b', 'text' => 'Posproducción.'],
                    ['cod' => 'c', 'text' => 'Preproducción.'],
                    ['cod' => 'd', 'text' => 'Distribución.'],
                ]
            ],
            [
                'text' => '¿Qué género audiovisual se enfoca en la exploración de futurismo y tecnología?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Ciencia Ficción.',
                'category' => 'CINE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Fantasía.'],
                    ['cod' => 'b', 'text' => 'Comedia.'],
                    ['cod' => 'c', 'text' => 'Ciencia Ficción.'],
                    ['cod' => 'd', 'text' => 'Drama.'],
                ]
            ],
            [
                'text' => '¿Qué función principal cumple la lente en una cámara?',
                'examen_id' => $id2,
                'answer' => 'd',
                'correct_answer' => 'Conectar dispositivos.',
                'category' => 'CÁMARAS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Almacenar imágenes.'],
                    ['cod' => 'b', 'text' => 'Capturar luz.'],
                    ['cod' => 'c', 'text' => 'Procesar sonido.'],
                    ['cod' => 'd', 'text' => 'Conectar dispositivos.'],
                ]
            ],
            [
                'text' => '¿Cuál es la diferencia clave entre una cámara mono y una cámara estéreo?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'El número de canales de audio.',
                'category' => 'CÁMARAS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'La calidad de la imagen.'],
                    ['cod' => 'b', 'text' => 'El número de lentes.'],
                    ['cod' => 'c', 'text' => 'El número de canales de audio.'],
                    ['cod' => 'd', 'text' => 'La resolución del sensor.'],
                ]
            ],
            [
                'text' => '¿Qué significa la profundidad de bits en el contexto de un sensor de cámara?',
                'examen_id' => $id2,
                'answer' => 'd',
                'correct_answer' => 'La cantidad de información de color que el sensor puede capturar.',
                'category' => 'CÁMARAS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'La cantidad de colores en una imagen.'],
                    ['cod' => 'b', 'text' => 'El tamaño físico del sensor.'],
                    ['cod' => 'c', 'text' => 'El número de canales de audio.'],
                    ['cod' => 'd', 'text' => 'La cantidad de información de color que el sensor puede capturar.'],
                ]
            ],
            [
                'text' => '¿Qué es la apertura de una lente de cámara?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'La cantidad de luz que entra en la cámara.',
                'category' => 'CÁMARAS',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'El tiempo de exposición.'],
                    ['cod' => 'b', 'text' => 'El número de megapíxeles.'],
                    ['cod' => 'c', 'text' => 'La cantidad de luz que entra en la cámara.'],
                    ['cod' => 'd', 'text' => 'El tamaño físico de la lente.'],
                ]
            ],
            [
                'text' => '¿Cuál es la función principal de un panel de control o switcher en producción audiovisual?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Alternar entre fuentes de video y audio en tiempo real.',
                'category' => 'PRODUCCIÓN AUDIOVISUAL',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Tomar fotografías.'],
                    ['cod' => 'b', 'text' => 'Mezclar audio.'],
                    ['cod' => 'c', 'text' => 'Alternar entre fuentes de video y audio en tiempo real.'],
                    ['cod' => 'd', 'text' => 'Proyectar imágenes en una pantalla grande.'],
                ]
            ],
            [
                'text' => '¿Qué papel desempeña la absorción en la acústica de una sala?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Reducir la intensidad del sonido.',
                'category' => 'ACÚSTICA',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Amplificar el sonido.'],
                    ['cod' => 'b', 'text' => 'Reducir la intensidad del sonido.'],
                    ['cod' => 'c', 'text' => 'Mejorar la calidad del sonido.'],
                    ['cod' => 'd', 'text' => 'Crear eco.'],
                ]
            ],
            [
                'text' => '¿Cuál es la unidad de medida de la frecuencia en la acústica?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Hertz.',
                'category' => 'ACÚSTICA',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Decibelios.'],
                    ['cod' => 'b', 'text' => 'Hertz.'],
                    ['cod' => 'c', 'text' => 'Amplitud.'],
                    ['cod' => 'd', 'text' => 'Kilogramos.'],
                ]
            ],
            [
                'text' => '¿Qué propiedad del sonido determina su tono o agudeza?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Frecuencia.',
                'category' => 'ACÚSTICA',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Amplitud.'],
                    ['cod' => 'b', 'text' => 'Frecuencia.'],
                    ['cod' => 'c', 'text' => 'Velocidad.'],
                    ['cod' => 'd', 'text' => 'Intensidad.'],
                ]
            ],
            [
                'text' => '¿En qué se diferencia el sonido 5.1 del sonido estéreo?',
                'examen_id' => $id2,
                'answer' => 'a',
                'correct_answer' => 'El sonido 5.1 tiene cinco canales de audio y un canal de bajos, mientras que el estéreo tiene dos canales.',
                'category' => 'SONIDO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'El sonido 5.1 tiene cinco canales de audio y un canal de bajos, mientras que el estéreo tiene dos canales.'],
                    ['cod' => 'b', 'text' => 'El sonido 5.1 es mono, mientras que el estéreo es bidireccional.'],
                    ['cod' => 'c', 'text' => 'El sonido 5.1 utiliza un solo canal de audio, mientras que el estéreo utiliza dos.'],
                    ['cod' => 'd', 'text' => 'El sonido 5.1 tiene dos canales de audio, mientras que el estéreo tiene cinco.'],
                ]
            ],
            [
                'text' => '¿Cuál es la principal aplicación del efecto Auto-Tune en la producción audiovisual?',
                'examen_id' => $id2,
                'answer' => 'c',
                'correct_answer' => 'Corregir la afinación vocal.',
                'category' => 'SONIDO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Corregir errores de iluminación.'],
                    ['cod' => 'b', 'text' => 'Modificar la velocidad de reproducción.'],
                    ['cod' => 'c', 'text' => 'Corregir la afinación vocal.'],
                    ['cod' => 'd', 'text' => 'Añadir efectos de sonido especiales.'],
                ]
            ]

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

        $preguntasbasedatos=[
            [
                'text' => '¿Qué es un compilador en el contexto de lenguajes de programación?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Un programa que traduce código fuente a lenguaje de máquina.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Un intérprete.'],
                    ['cod' => 'b', 'text' => 'Un programa que traduce código fuente a lenguaje de máquina.'],
                    ['cod' => 'c', 'text' => 'Un depurador.'],
                    ['cod' => 'd', 'text' => 'Una biblioteca estándar.'],
                ]
            ],
            [
                'text' => 'Cuál de las siguientes opciones describe mejor el proceso de compilación?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.'],
                    ['cod' => 'b', 'text' => 'Ejecución directa del código fuente.'],
                    ['cod' => 'c', 'text' => 'Transformación del código fuente en un documento PDF.'],
                    ['cod' => 'd', 'text' => 'Conversión del código fuente en imágenes.'],
                ]
            ],
            [
                'text' => '¿Cuál es una ventaja de los lenguajes compilados en comparación con los interpretados?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Mayor eficiencia en términos de rendimiento.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
                    ['cod' => 'b', 'text' => 'Facilidad de desarrollo.'],
                    ['cod' => 'c', 'text' => 'Mayor eficiencia en términos de rendimiento.'],
                    ['cod' => 'd', 'text' => 'Menos propensión a errores.'],
                ]
            ],
            [
                'text' => '¿Cuál es una característica clave de los lenguajes interpretados?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Mayor portabilidad.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
                    ['cod' => 'b', 'text' => 'Mayor optimización.'],
                    ['cod' => 'c', 'text' => 'Menor uso de recursos.'],
                    ['cod' => 'd', 'text' => 'Compilación previa.'],
                ]
            ],
            [
                'text' => '¿Qué es la JVM en el contexto de Java?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Una máquina virtual que interpreta el bytecode de Java.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Una biblioteca de música.'],
                    ['cod' => 'b', 'text' => 'Una máquina virtual que interpreta el bytecode de Java.'],
                    ['cod' => 'c', 'text' => 'Un compilador de C++.'],
                    ['cod' => 'd', 'text' => 'Un entorno de desarrollo integrado.'],
                ]
            ],
            [
                'text' => '¿Qué es una característica distintiva de las metodologías ágiles?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Entregas frecuentes y adaptación continua.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Enfoque en la planificación detallada.'],
                    ['cod' => 'b', 'text' => 'Uso de la cascada como modelo principal.'],
                    ['cod' => 'c', 'text' => 'Entregas frecuentes y adaptación continua.'],
                    ['cod' => 'd', 'text' => 'Énfasis en la documentación exhaustiva.'],
                ]
            ],
            [
                'text' => 'Cuál es una ventaja de las metodologías ágiles en comparación con las tradicionales?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Adaptación más rápida a cambios en los requisitos.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
                    ['cod' => 'b', 'text' => 'Adaptación más rápida a cambios en los requisitos.'],
                    ['cod' => 'c', 'text' => 'Menor necesidad de colaboración con los usuarios.'],
                    ['cod' => 'd', 'text' => 'Menor comunicación con el equipo de desarrollo.'],
                ]
            ],
            [
                'text' => '¿Qué implica el modelo en cascada en el desarrollo de software?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Fases secuenciales de desarrollo, donde cada fase debe completarse antes de la siguiente.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Fases secuenciales de desarrollo, donde cada fase debe completarse antes de la siguiente.'],
                    ['cod' => 'b', 'text' => 'Entregas frecuentes de incrementos del producto.'],
                    ['cod' => 'c', 'text' => 'Desarrollo iterativo con enfoque en la retroalimentación constante.'],
                    ['cod' => 'd', 'text' => 'Uso exclusivo de técnicas de orientación a objetos.'],
                ]
            ],
            [
                'text' => '¿Qué significa la sigla XP en el contexto de metodologías de desarrollo?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Extreme Programming.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Extreme Programming.'],
                    ['cod' => 'b', 'text' => 'Extra Productivity.'],
                    ['cod' => 'c', 'text' => 'Excellent Planning.'],
                    ['cod' => 'd', 'text' => 'Efficient Progression.'],
                ]
            ],
            [
                'text' => '¿Qué implica la metodología DevOps en el desarrollo de software?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Integración de desarrollo y operaciones para mejorar la calidad y la velocidad.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Integración de desarrollo y operaciones para mejorar la calidad y la velocidad.'],
                    ['cod' => 'b', 'text' => 'Enfoque exclusivo en la planificación de proyectos.'],
                    ['cod' => 'c', 'text' => 'Ignorar la automatización de procesos.'],
                    ['cod' => 'd', 'text' => 'Uso de modelos en cascada.'],
                ]
            ],
            [
                'text' => '¿En qué se enfoca el modelo en V en comparación con el modelo en cascada?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Correspondencia entre fases de desarrollo y pruebas.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Desarrollo en ciclos iterativos.'],
                    ['cod' => 'b', 'text' => 'Correspondencia entre fases de desarrollo y pruebas.'],
                    ['cod' => 'c', 'text' => 'Entregas frecuentes en sprints.'],
                    ['cod' => 'd', 'text' => 'Uso exclusivo de técnicas de orientación a objetos.'],
                ]
            ],
            [
                'text' => '¿Cuál es una característica clave de los lenguajes compilados?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Eficiencia en tiempo de ejecución.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Portabilidad.'],
                    ['cod' => 'b', 'text' => 'Facilidad de depuración.'],
                    ['cod' => 'c', 'text' => 'Eficiencia en tiempo de ejecución.'],
                    ['cod' => 'd', 'text' => 'Mayor flexibilidad.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes opciones describe mejor el proceso de compilación?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Traducción del código fuente a lenguaje de máquina antes de la ejecución.'],
                    ['cod' => 'b', 'text' => 'Ejecución directa del código fuente.'],
                    ['cod' => 'c', 'text' => 'Transformación del código fuente en un documento PDF.'],
                    ['cod' => 'd', 'text' => 'Conversión del código fuente en imágenes.'],
                ]
            ],
            [
                'text' => '¿Qué define al enfoque Scrum en el desarrollo de software?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Ciclos de desarrollo llamados "sprints".',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Ciclos de desarrollo llamados "sprints".'],
                    ['cod' => 'b', 'text' => 'Priorización exclusiva del diseño.'],
                    ['cod' => 'c', 'text' => 'Uso exclusivo de programación en parejas.'],
                    ['cod' => 'd', 'text' => 'Ausencia de iteraciones.'],
                ]
            ],
            [
                'text' => '¿Cuál es una ventaja de las metodologías ágiles en comparación con las tradicionales?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Adaptación más rápida a cambios en los requisitos.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
                    ['cod' => 'b', 'text' => 'Adaptación más rápida a cambios en los requisitos.'],
                    ['cod' => 'c', 'text' => 'Menor necesidad de colaboración con los usuarios.'],
                    ['cod' => 'd', 'text' => 'Menor comunicación con el equipo de desarrollo.'],
                ]
            ],
            [
                'text' => '¿En qué se enfoca la metodología Kanban?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Visualización del flujo de trabajo y gestión de tareas.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Visualización del flujo de trabajo y gestión de tareas.'],
                    ['cod' => 'b', 'text' => 'Entregas frecuentes en ciclos llamados sprints.'],
                    ['cod' => 'c', 'text' => 'Planificación detallada y exhaustiva.'],
                    ['cod' => 'd', 'text' => 'Uso de modelos en cascada exclusivamente.'],
                ]
            ],
            [
                'text' => '¿Cuál es una característica clave de las metodologías iterativas e incrementales?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Desarrollo en ciclos repetitivos que producen incrementos funcionales.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Desarrollo en ciclos repetitivos que producen incrementos funcionales.'],
                    ['cod' => 'b', 'text' => 'Enfoque en la entrega en un único ciclo largo.'],
                    ['cod' => 'c', 'text' => 'Ignorar la retroalimentación del cliente.'],
                    ['cod' => 'd', 'text' => 'Mayor énfasis en la documentación que en el código.'],
                ]
            ],
            [
                'text' => '¿Qué beneficio principal ofrece Lean Development en el desarrollo de software?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Eliminación del desperdicio y maximización del valor entregado al cliente.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor énfasis en la documentación.'],
                    ['cod' => 'b', 'text' => 'Eliminación del desperdicio y maximización del valor entregado al cliente.'],
                    ['cod' => 'c', 'text' => 'Mayor énfasis en la planificación detallada.'],
                    ['cod' => 'd', 'text' => 'Uso exclusivo de metodologías ágiles.'],
                ]
            ],
            [
                'text' => '¿Qué factor influye en la elección de una metodología de desarrollo de software?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Naturaleza del proyecto, experiencia del equipo y requisitos del proyecto.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Naturaleza del proyecto, experiencia del equipo y requisitos del proyecto.'],
                    ['cod' => 'b', 'text' => 'Tamaño del equipo exclusivamente.'],
                    ['cod' => 'c', 'text' => 'Preferencia personal del líder del proyecto.'],
                    ['cod' => 'd', 'text' => 'Disponibilidad de recursos financieros.'],
                ]
            ],
            [
                'text' => '¿Cuál es una desventaja general de las metodologías ágiles?',
                'examen_id' => $idemcbd,
                'answer' => 'b',
                'correct_answer' => 'Puede haber resistencia al cambio por parte del equipo.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor adaptabilidad a cambios.'],
                    ['cod' => 'b', 'text' => 'Puede haber resistencia al cambio por parte del equipo.'],
                    ['cod' => 'c', 'text' => 'Mayor énfasis en la documentación.'],
                    ['cod' => 'd', 'text' => 'Requiere una planificación detallada.'],
                ]
            ],
            [
                'text' => '¿Qué es un beneficio común de las metodologías iterativas e incrementales?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Entrega temprana de funcionalidad y adaptación continua.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Entrega temprana de funcionalidad y adaptación continua.'],
                    ['cod' => 'b', 'text' => 'Mayor énfasis en la planificación detallada.'],
                    ['cod' => 'c', 'text' => 'Menor énfasis en la retroalimentación del cliente.'],
                    ['cod' => 'd', 'text' => 'Requiere menos comunicación con los usuarios.'],
                ]
            ],
            [
                'text' => '¿Qué es un desafío general de las metodologías ágiles?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Requiere un cambio cultural y ajuste en la forma de trabajar.',
                'category' => 'METODOLOGÍAS DE DESARROLLO',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Adaptación continua a cambios.'],
                    ['cod' => 'b', 'text' => 'Mayor eficiencia en el desarrollo.'],
                    ['cod' => 'c', 'text' => 'Requiere un cambio cultural y ajuste en la forma de trabajar.'],
                    ['cod' => 'd', 'text' => 'Menor participación del equipo en la toma de decisiones.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes opciones describe mejor un lenguaje compilado?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Se traduce completamente a lenguaje de máquina antes de la ejecución.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Se ejecuta línea por línea.'],
                    ['cod' => 'b', 'text' => 'Utiliza una máquina virtual.'],
                    ['cod' => 'c', 'text' => 'Se traduce completamente a lenguaje de máquina antes de la ejecución.'],
                    ['cod' => 'd', 'text' => 'Requiere un intérprete en tiempo real.'],
                ]
            ],
            [
                'text' => '¿Qué es un ejemplo de un lenguaje de programación compilado?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'C++.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Python.'],
                    ['cod' => 'b', 'text' => 'Ruby.'],
                    ['cod' => 'c', 'text' => 'C++.'],
                    ['cod' => 'd', 'text' => 'JavaScript.'],
                ]
            ],
            [
                'text' => '¿Cuál es una ventaja clave de los lenguajes compilados en comparación con los interpretados?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Mayor eficiencia en tiempo de ejecución.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
                    ['cod' => 'b', 'text' => 'Facilidad de depuración.'],
                    ['cod' => 'c', 'text' => 'Mayor eficiencia en tiempo de ejecución.'],
                    ['cod' => 'd', 'text' => 'Mayor flexibilidad de sintaxis.'],
                ]
            ],
            [
                'text' => '¿Cuál es un ejemplo de un lenguaje de programación interpretado?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Python.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Python.'],
                    ['cod' => 'b', 'text' => 'Java.'],
                    ['cod' => 'c', 'text' => 'C++.'],
                    ['cod' => 'd', 'text' => 'C#.'],
                ]
            ],

            [
                'text' => '¿Cuál es una característica de los lenguajes interpretados?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Mayor portabilidad.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Mayor portabilidad.'],
                    ['cod' => 'b', 'text' => 'Mayor eficiencia en tiempo de ejecución.'],
                    ['cod' => 'c', 'text' => 'Necesidad de compilación previa.'],
                    ['cod' => 'd', 'text' => 'Mayor velocidad de ejecución.'],
                ]
            ],
            [
                'text' => '¿Qué es un ejemplo de un lenguaje de programación orientado a objetos?',
                'examen_id' => $idemcbd,
                'answer' => 'c',
                'correct_answer' => 'Java.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'C.'],
                    ['cod' => 'b', 'text' => 'Fortran.'],
                    ['cod' => 'c', 'text' => 'Java.'],
                    ['cod' => 'd', 'text' => 'Ruby.'],
                ]
            ],
            [
                'text' => '¿Cuál de las siguientes opciones describe mejor la compilación en tiempo de ejecución?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'El código fuente se compila en lenguaje de máquina durante la ejecución del programa.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'El código fuente se compila en lenguaje de máquina durante la ejecución del programa.'],
                    ['cod' => 'b', 'text' => 'La compilación se realiza antes de la ejecución y genera un archivo ejecutable.'],
                    ['cod' => 'c', 'text' => 'No es necesario compilar el código fuente en lenguaje de máquina.'],
                    ['cod' => 'd', 'text' => 'La compilación se realiza en una etapa de preprocesamiento.'],
                ]
            ],
            [
                'text' => '¿Qué es un IDE en el contexto de la programación?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Un Entorno de Desarrollo Integrado que proporciona herramientas para escribir, depurar y ejecutar código.',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Un Entorno de Desarrollo Integrado que proporciona herramientas para escribir, depurar y ejecutar código.'],
                    ['cod' => 'b', 'text' => 'Una interfaz de usuario gráfica.'],
                    ['cod' => 'c', 'text' => 'Un lenguaje de programación.'],
                    ['cod' => 'd', 'text' => 'Un compilador.'],
                ]
            ],
            [
                'text' => '¿Cuál es uno de los beneficios de usar un IDE?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Facilita la escritura de código con funciones de autocompletado y resaltado de sintaxis.',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Facilita la escritura de código con funciones de autocompletado y resaltado de sintaxis.'],
                    ['cod' => 'b', 'text' => 'Reduce la necesidad de pruebas de código.'],
                    ['cod' => 'c', 'text' => 'Aumenta la velocidad de ejecución del programa.'],
                    ['cod' => 'd', 'text' => 'Simplifica la gestión de bases de datos.'],
                ]
            ],
            [
                'text' => 'Divide el proyecto en ciclos llamados "sprints"',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Scrum',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Scrum'],
                    ['cod' => 'b', 'text' => 'Metodologias Agiles'],
                    ['cod' => 'c', 'text' => 'Metodologias de Desarrollo'],
                    ['cod' => 'd', 'text' => 'Ciclo de Vida'],
                ]
            ],
            [
                'text' => 'Proceso Unificado de Rational',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'RUP',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'RUP'],
                    ['cod' => 'b', 'text' => 'DSDM'],
                    ['cod' => 'c', 'text' => 'Metodologias de Desarrollo'],
                    ['cod' => 'd', 'text' => 'Metodologia Iterativa'],
                ]
            ],            
            [
                'text' => 'Son enfoques sistemáticos y estructurados para planificar, diseñar, implementar y mantener proyectos de software',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Metodologia de Desarrollo de Software',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Metodologia de Desarrollo de Software'],
                    ['cod' => 'b', 'text' => 'Ciclo de Vida'],
                    ['cod' => 'c', 'text' => 'Desarrollo de Software'],
                    ['cod' => 'd', 'text' => 'Metodologias Agiles'],
                ]
            ],               
            [
                'text' => 'Es una metodología secuencial en la que cada fase del desarrollo, como el análisis, diseño, implementación y pruebas, se lleva a cabo en una secuencia lineal',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Modelo en Cascada',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Modelo en Cascada'],
                    ['cod' => 'b', 'text' => 'Ciclo de Vida'],
                    ['cod' => 'c', 'text' => 'Desarrollo de Software'],
                    ['cod' => 'd', 'text' => 'Metodologias Agiles'],
                ]
            ],       
            [
                'text' => 'Java es un lenguaje de programación compilado y versatil....',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Ya que utiliza la JVM para ejecutarse en diversas Plataformas',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Ya que utiliza la JVM para ejecutarse en diversas Plataformas'],
                    ['cod' => 'b', 'text' => 'Porque es un lenguaje de programación orientado a objetos POO'],
                    ['cod' => 'c', 'text' => 'Debido a su popularidad en el ámbito científico'],
                    ['cod' => 'd', 'text' => 'Debido a su lenta velocidad de ejecución en comparación con otros lenguajes'],
                ]
            ],
            [
                'text' => 'JVM',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Maquina Virtual',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Maquina Virtual'],
                    ['cod' => 'b', 'text' => 'Machine Java Vue'],
                    ['cod' => 'c', 'text' => 'Libreria De POO'],
                    ['cod' => 'd', 'text' => 'Plataforma de Java'],
                ]
            ],
            [
                'text' => 'MARCA LA LINEA DE CODIGO ESCRITO CON JAVA',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'System.out.println("Hola, Mundo")',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'System.out.println("Hola, Mundo")'],
                    ['cod' => 'b', 'text' => 'cout<<"hola mundo"<<endl;'],
                    ['cod' => 'c', 'text' => 'print("Hola Mundo")'],
                    ['cod' => 'd', 'text' => 'echo "Hola Mundo"'],
                ]
            ],            
            [
                'text' => 'Marca el lenguaje que no es interpretado',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'C',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'C'],
                    ['cod' => 'b', 'text' => 'Python'],
                    ['cod' => 'c', 'text' => 'Javascript'],
                    ['cod' => 'd', 'text' => 'Html'],
                ]
            ],
            [
                'text' => 'Marca EL IDE QUE NO SE UTILIZA PARA GESTION DE BASE DE DATOS',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'SQL',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'SQL'],
                    ['cod' => 'b', 'text' => 'WORKBENCH'],
                    ['cod' => 'c', 'text' => 'SQL YOG'],
                    ['cod' => 'd', 'text' => 'PHPMYADMIN'],
                ]
            ],            
            [
                'text' => 'SON SENTENCIAS PARA LA CREACION, ALTERACION Y ELIMINACION DE OBJETOS EN LA BASE DE DATOS',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'DDL',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'DDL'],
                    ['cod' => 'b', 'text' => 'DML'],
                    ['cod' => 'c', 'text' => 'SQL'],
                    ['cod' => 'd', 'text' => 'DQL'],
                ]
            ],    
            [
                'text' => 'ES UNA TABLA O CONTENEDOR DE INFORMACION DE LA BASE DE DATOS RELACIONAL QUE DEPENDE DE OTRA TABLA ANTECESORA, es decir que su registro depende de registros obtenidos con aterioridad ',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'TABLA HIJA',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'TABLA HIJA'],
                    ['cod' => 'b', 'text' => 'Referencia de tabla'],
                    ['cod' => 'c', 'text' => 'Tabla Referenciada'],
                    ['cod' => 'd', 'text' => 'Foreign Key'],
                ]
            ],
            [
                'text' => '¿Qué es un campo de la tabla que referencia a otra tabla?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Foreign Key',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Foreign Key'],
                    ['cod' => 'b', 'text' => 'Primary Key'],
                    ['cod' => 'c', 'text' => 'References Table'],
                    ['cod' => 'd', 'text' => 'Modify'],
                ]
            ],
            [
                'text' => 'que se escribe para comentar en SQL',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => ' /* mi comentario */ ',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => ' /* mi comentario */ '],
                    ['cod' => 'b', 'text' => '//micomentario'],
                    ['cod' => 'c', 'text' => '<<mi comentario>>'],
                    ['cod' => 'd', 'text' => '**mi comentario**'],
                ]
            ],
            [
                'text' => 'Consulta o sentencia de sql para modificar objetos en la base de datos',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'ALTER',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'ALTER'],
                    ['cod' => 'b', 'text' => 'MODIFY'],
                    ['cod' => 'c', 'text' => 'CREATE'],
                    ['cod' => 'd', 'text' => 'DROP'],
                ]
            ],
            [
                'text' => 'Consulta o sentencia de sql para modificar objetos (especificamente las columnas) en la base de datos',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'MODIFY',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'ALTER'],
                    ['cod' => 'b', 'text' => 'MODIFY'],
                    ['cod' => 'c', 'text' => 'CREATE'],
                    ['cod' => 'd', 'text' => 'DROP'],
                ]
            ],
            [
                'text' => '¿Cómo se denomina el campo principal que identifica los registros en una tabla de base de datos?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Primary Key',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Foreign Key'],
                    ['cod' => 'b', 'text' => 'Primary Key'],
                    ['cod' => 'c', 'text' => 'Indice'],
                    ['cod' => 'd', 'text' => 'Integer'],
                ]
            ],
            [
                'text' => 'En una base de datos relacional, ¿cuál de las siguientes afirmaciones es cierta?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'La clave principal es un campo único que identifica los registros en una tabla.',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'La clave principal es un campo que referencia a otra tabla.'],
                    ['cod' => 'b', 'text' => 'La clave foránea es un campo principal que identifica los registros en una tabla.'],
                    ['cod' => 'c', 'text' => 'La clave principal y la clave foránea son lo mismo.'],
                    ['cod' => 'd', 'text' => 'La clave principal es un campo único que identifica los registros en una tabla.'],
                ]
            ],
            [
                'text' => 'Si deseas almacenar una cadena de texto de longitud variable en una columna de una tabla en MySQL, ¿cuál de los siguientes tipos de datos utilizarías?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'VARCHAR',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'VARCHAR'],
                    ['cod' => 'b', 'text' => 'INT'],
                    ['cod' => 'c', 'text' => 'CHAR'],
                    ['cod' => 'd', 'text' => 'DATE'],
                ]
            ],            
            [
                'text' => 'En la creacion de una tabla Persona que tipo de dato utilizo para dni',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'char',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'char'],
                    ['cod' => 'b', 'text' => 'INT'],
                    ['cod' => 'c', 'text' => 'varchar'],
                    ['cod' => 'd', 'text' => 'numeric'],
                ]
            ],
            [
                'text' => 'Que sentencia o Consulta utilizo para seleccionar una base de datos y luego hacer consultas con sus tablas',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'use',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'use'],
                    ['cod' => 'b', 'text' => 'select'],
                    ['cod' => 'c', 'text' => 'show'],
                    ['cod' => 'd', 'text' => 'view'],
                ]
            ],
            [
                'text' => 'Al ejecutar una consulta SQL, recibes el mensaje de error "Syntax error on line 3.". ¿Qué debe hacer para abordar este problema?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Revisar la línea 3 de la consulta para detectar y corregir cualquier error de sintaxis.',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Revisar la línea 3 de la consulta para detectar y corregir cualquier error de sintaxis.'],
                    ['cod' => 'b', 'text' => 'Ignorar el mensaje, ya que es solo un aviso.'],
                    ['cod' => 'c', 'text' => 'Volver a ejecutar la consulta sin hacer cambios, ya que no hay problemas de sintaxis.'],
                    ['cod' => 'd', 'text' => 'Consultar a un colega y pedirle que solucione el problema por ti.'],
                ]
            ],
            [
                'text' => 'Que sucede cuando hay un error en la escritura de tu consulta en SQL ',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'SINTAX',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'SINTAX'],
                    ['cod' => 'b', 'text' => 'SUCCES'],
                    ['cod' => 'c', 'text' => 'WARNING'],
                    ['cod' => 'd', 'text' => 'DANGER'],
                ]
            ],
            [
                'text' => 'En SQL, ¿cuál de las siguientes declaraciones se utilizaría para eliminar una tabla existente de la base de datos?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'DROP',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'DROP'],
                    ['cod' => 'b', 'text' => 'SELECT'],
                    ['cod' => 'c', 'text' => 'DELETE'],
                    ['cod' => 'd', 'text' => 'INSERT'],
                ]
            ],
            [
                'text' => '¿Cuál es la función principal de una declaración DDL en SQL?',
                'examen_id' => $idemcbd,
                'answer' => 'a',
                'correct_answer' => 'Definir, modificar o eliminar estructuras de base de datos.',
                'category' => 'DESARROLLO DE SOFTWARE',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Definir, modificar o eliminar estructuras de base de datos.'],
                    ['cod' => 'b', 'text' => 'Ingresar datos en una tabla'],
                    ['cod' => 'c', 'text' => 'Consultar datos en una tabla.'],
                    ['cod' => 'd', 'text' => 'Realizar cálculos matemáticos en una base de datos.'],
                ]
            ],                  
        ];

        $preguntasredes=[
            [
                'text' => '¿Qué significa ASN.1 en el contexto de la Capa de Enlace de Datos?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Abstract Syntax Notation One (Notación Sintáctica Abstracta Uno)',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Análisis de Sistemas de Red'],
                    ['cod' => 'b', 'text' => 'Abstract Syntax Notation One (Notación Sintáctica Abstracta Uno)'],
                    ['cod' => 'c', 'text' => 'Advanced Security Network'],
                    ['cod' => 'd', 'text' => 'Application System Network'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes NO es un tipo de datos en ASN.1?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'FLOAT',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'INTEGER'],
                    ['cod' => 'b', 'text' => 'BOOLEAN'],
                    ['cod' => 'c', 'text' => 'FLOAT'],
                    ['cod' => 'd', 'text' => 'OCTET STRING'],
                ]
            ],
            [
                'text' => '¿Qué función tiene la codificación BER en la Capa de Enlace de Datos?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Codificar y decodificar datos ASN.1 para su transmisión',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Generar códigos de barras'],
                    ['cod' => 'b', 'text' => 'Enviar mensajes de correo electrónico'],
                    ['cod' => 'c', 'text' => 'Codificar y decodificar datos ASN.1 para su transmisión'],
                    ['cod' => 'd', 'text' => 'Realizar operaciones matemáticas en los datos'],
                ]
            ],
            [
                'text' => '¿Cuál es uno de los beneficios de la codificación BER en la comunicación de redes?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Garantiza la interpretación precisa de los datos independientemente de la plataforma',
                'category' => 'Modelo OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Incrementa la complejidad de los datos'],
                    ['cod' => 'b', 'text' => 'Garantiza la interpretación precisa de los datos independientemente de la plataforma'],
                    ['cod' => 'c', 'text' => 'Reduce la eficiencia de la transmisión de datos'],
                    ['cod' => 'd', 'text' => 'Limita la compatibilidad entre sistemas'],
                ]
            ],
            [
                'text' => '¿Qué se entiende por "identificador de tipo" en la codificación BER?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Un número único que identifica el tipo de datos ASN.1',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'El nombre del protocolo utilizado'],
                    ['cod' => 'b', 'text' => 'El número de puerto en el que se envían los datos'],
                    ['cod' => 'c', 'text' => 'Un número único que identifica el tipo de datos ASN.1'],
                    ['cod' => 'd', 'text' => 'El código de país del dispositivo de origen'],
                ]
            ],
            [
                'text' => '¿Qué tipo de datos en ASN.1 representa valores verdadero o falso?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'BOOLEAN',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'INTEGER'],
                    ['cod' => 'b', 'text' => 'BOOLEAN'],
                    ['cod' => 'c', 'text' => 'OCTET STRING'],
                    ['cod' => 'd', 'text' => 'IA5String'],
                ]
            ],
            [
                'text' => '¿Qué función tiene la Capa de Enlace de Datos en el Modelo OSI?',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'Transmitir datos de manera confiable entre dispositivos directamente conectados.',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Transmitir datos de manera confiable entre dispositivos directamente conectados.'],
                    ['cod' => 'b', 'text' => 'Encriptar todos los datos en la red'],
                    ['cod' => 'c', 'text' => 'Determinar la ruta óptima para la transmisión de datos'],
                    ['cod' => 'd', 'text' => 'Traducir direcciones IP en direcciones MAC.'],
                ]
            ],
            [
                'text' => '¿Qué tipo de datos en ASN.1 representa cadenas de caracteres ASCII?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'IA5String',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'INTEGER'],
                    ['cod' => 'b', 'text' => 'BOOLEAN'],
                    ['cod' => 'c', 'text' => 'OCTET STRING'],
                    ['cod' => 'd', 'text' => 'IA5String'],
                ]
            ],
            [
                'text' => 'Cual de los siguientes no es una capa del modelo OSI',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'AUTENTICACION',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'APLICACION'],
                    ['cod' => 'b', 'text' => 'PRESENTACION'],
                    ['cod' => 'c', 'text' => 'FISICO'],
                    ['cod' => 'd', 'text' => 'AUTENTICACION'],
                ]
            ],
            [
                'text' => 'Esta capa se ocupa de la transmisión de señales físicas a través de medios de comunicación como cables y ondas de radio.',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'FISICO',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'APLICACION'],
                    ['cod' => 'b', 'text' => 'PRESENTACION'],
                    ['cod' => 'c', 'text' => 'FISICO'],
                    ['cod' => 'd', 'text' => 'AUTENTICACION'],
                ]
            ],
            [
                'text' => 'Se centra en el enrutamiento de datos entre redes y determina la ruta que deben seguir los paquetes de datos para llegar a su destino',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'RED',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'APLICACION'],
                    ['cod' => 'b', 'text' => 'PRESENTACION'],
                    ['cod' => 'c', 'text' => 'FISICO'],
                    ['cod' => 'd', 'text' => 'RED'],
                ]
            ],
            [
                'text' => 'Esta capa es responsable de la transferencia de datos extremo a extremo y asegura que los datos se entreguen de manera confiable y en el orden correcto. También maneja el control de flujo y la detección de errores.',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'TRANSPORTE',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'APLICACION'],
                    ['cod' => 'b', 'text' => 'TRANSPORTE'],
                    ['cod' => 'c', 'text' => 'FISICO'],
                    ['cod' => 'd', 'text' => 'RED'],
                ]
            ],
            [
                'text' => 'Establece, administra y finaliza las conexiones entre aplicaciones en dispositivos remotos. Controla el diálogo y la sincronización entre los procesos de las aplicaciones.',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'CAPA DE SESSION',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
                    ['cod' => 'b', 'text' => 'CAPA DE TRANSPORTE'],
                    ['cod' => 'c', 'text' => 'CAPA FISICO'],
                    ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
                ]
            ],
            [
                'text' => 'se encarga de la traducción, compresión y encriptación de los datos para garantizar que puedan ser entendidos por las aplicaciones en ambos extremos de la comunicación.',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'CAPA DE PRESENTACION',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
                    ['cod' => 'b', 'text' => 'CAPA DE PRESENTACION'],
                    ['cod' => 'c', 'text' => 'CAPA FISICO'],
                    ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
                ]
            ],
            [
                'text' => 'Es la capa más cercana al usuario final y proporciona servicios de red directamente utilizados por las aplicaciones.',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'CAPA DE APLICACION',
                'category' => 'MODELO OSI',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'CAPA DE APLICACION'],
                    ['cod' => 'b', 'text' => 'CAPA DE PRESENTACION'],
                    ['cod' => 'c', 'text' => 'CAPA FISICO'],
                    ['cod' => 'd', 'text' => 'CAPA DE SESSION'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes objetivos de la Administración del Funcionamiento de Red se centra en garantizar que la red esté disponible cuando se necesite y minimizar el tiempo de inactividad no planificado?',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'Disponibilidad',
                'category' => 'Administración de Redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Disponibilidad'],
                    ['cod' => 'b', 'text' => 'Rendimiento'],
                    ['cod' => 'c', 'text' => 'Seguridad'],
                    ['cod' => 'd', 'text' => 'Eficiencia'],
                ]
            ],
            [
                'text' => '¿Qué objetivo de la Administración del Funcionamiento de Red se enfoca en optimizar el rendimiento de la red para garantizar un acceso rápido y eficiente a los recursos y servicios de la red?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Rendimiento',
                'category' => 'Administración de Redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Disponibilidad'],
                    ['cod' => 'b', 'text' => 'Rendimiento'],
                    ['cod' => 'c', 'text' => 'Seguridad'],
                    ['cod' => 'd', 'text' => 'Eficiencia'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes objetivos se relaciona con proteger la red contra amenazas cibernéticas y garantizar la integridad y confidencialidad de los datos?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Seguridad',
                'category' => 'Administración de Redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Rendimiento'],
                    ['cod' => 'b', 'text' => 'Seguridad'],
                    ['cod' => 'c', 'text' => 'Seguridad'],
                    ['cod' => 'd', 'text' => 'Eficiencia'],
                ]
            ],
            [
                'text' => '¿Qué objetivo de la Administración del Funcionamiento de Red se centra en diseñar y gestionar la red de manera que pueda crecer y adaptarse a las necesidades cambiantes de la organización?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Escalabilidad',
                'category' => 'Administración de Redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Disponibilidad'],
                    ['cod' => 'b', 'text' => 'Rendimiento'],
                    ['cod' => 'c', 'text' => 'Seguridad'],
                    ['cod' => 'd', 'text' => 'Escalabilidad'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes objetivos de la Administración del Funcionamiento de Red se refiere a utilizar los recursos de red de manera eficiente para minimizar costos y maximizar la productividad?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Eficiencia',
                'category' => 'Administración de Redes',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Rendimiento'],
                    ['cod' => 'b', 'text' => 'Seguridad'],
                    ['cod' => 'c', 'text' => 'Escalabilidad'],
                    ['cod' => 'd', 'text' => 'Eficiencia'],
                ]
            ],
            [
                'text' => '¿Cuál es el primer paso en el proceso de administración de fallas de red?',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'Detección de Fallas',
                'category' => 'Administración de Fallas de Red',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Detección de Fallas'],
                    ['cod' => 'b', 'text' => 'Diagnóstico'],
                    ['cod' => 'c', 'text' => 'Notificación'],
                    ['cod' => 'd', 'text' => 'Resolución'],
                ]
            ],
            [
                'text' => '¿Qué implica el paso de "Diagnóstico" en el proceso de administración de fallas de red?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Identificar la causa raíz de la falla',
                'category' => 'Administración de Fallas de Red',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Notificar a las partes interesadas'],
                    ['cod' => 'b', 'text' => 'Identificar la causa raíz de la falla'],
                    ['cod' => 'c', 'text' => 'Tomar medidas correctivas'],
                    ['cod' => 'd', 'text' => 'Supervisar la red de manera continua'],
                ]
            ],
            [
                'text' => '¿A quiénes se debe notificar una vez que se ha diagnosticado una falla en la red?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Partes interesadas relevantes, como el personal de TI y los usuarios afectados',
                'category' => 'Administración de Fallas de Red',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Técnicos de red solamente'],
                    ['cod' => 'b', 'text' => 'La alta dirección de la empresa'],
                    ['cod' => 'c', 'text' => 'Partes interesadas relevantes, como el personal de TI y los usuarios afectados'],
                    ['cod' => 'd', 'text' => 'No es necesario notificar a nadie'],
                ]
            ],
            [
                'text' => '¿Qué se debe hacer después de identificar la causa de una falla en el proceso de administración de fallas de red?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Tomar medidas correctivas',
                'category' => 'Administración de Fallas de Red',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Documentar la falla'],
                    ['cod' => 'b', 'text' => 'Realizar un diagnóstico adicional'],
                    ['cod' => 'c', 'text' => 'Supervisar la red de manera continua'],
                    ['cod' => 'd', 'text' => 'Tomar medidas correctivas'],
                ]
            ],
            [
                'text' => '¿Por qué es importante la etapa de "Verificación" en el proceso de administración de fallas de red?',
                'examen_id' => $idemcredes,
                'answer' => 'e',
                'correct_answer' => 'Para asegurarse de que la falla se haya resuelto de manera efectiva y que la red esté funcionando correctamente nuevamente',
                'category' => 'Administración de Fallas de Red',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Para notificar a las partes interesadas'],
                    ['cod' => 'b', 'text' => 'Para diagnosticar la causa raíz de la falla'],
                    ['cod' => 'c', 'text' => 'Para tomar medidas correctivas'],
                    ['cod' => 'd', 'text' => 'Para documentar la falla'],
                    ['cod' => 'e', 'text' => 'Para asegurarse de que la falla se haya resuelto de manera efectiva y que la red esté funcionando correctamente nuevamente'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes tipos de amenazas de ciberseguridad involucra el envío de correos electrónicos fraudulentos que pretenden ser de fuentes legítimas con el objetivo de obtener información confidencial?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Phishing',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Malware'],
                    ['cod' => 'b', 'text' => 'Phishing'],
                    ['cod' => 'c', 'text' => 'Fugas de Datos'],
                    ['cod' => 'd', 'text' => 'Ataques de Denegación de Servicio'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes tipos de amenazas de ciberseguridad se caracteriza por inundar un sistema o red con tráfico malicioso para sobrecargarlo, lo que resulta en la indisponibilidad del servicio?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Ataques de Denegación de Servicio (DoS/DDoS)',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Ransomware'],
                    ['cod' => 'b', 'text' => 'Ataques a la Seguridad de Red'],
                    ['cod' => 'c', 'text' => 'Ataques de Ingeniería Social'],
                    ['cod' => 'd', 'text' => 'Ataques de Denegación de Servicio (DoS/DDoS)'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes tipos de amenazas de ciberseguridad cifra los archivos de un sistema y exige un rescate a cambio de la clave de descifrado?',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'Ransomware',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Ransomware'],
                    ['cod' => 'b', 'text' => 'Ataques a la Identidad'],
                    ['cod' => 'c', 'text' => 'Malware'],
                    ['cod' => 'd', 'text' => 'Ataques de Ingeniería Social'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes tipos de amenazas de ciberseguridad involucra intentos de explotar vulnerabilidades en la infraestructura de red, como firewalls o enrutadores, para ganar acceso no autorizado o interrumpir las comunicaciones?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Ataques a la Seguridad de Red',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Ataques de Denegación de Servicio (DoS/DDoS)'],
                    ['cod' => 'b', 'text' => 'Ataques a la Seguridad de Red'],
                    ['cod' => 'c', 'text' => 'Fugas de Datos'],
                    ['cod' => 'd', 'text' => 'Ataques de Ingeniería Social'],
                ]
            ],
            [
                'text' => '¿Cuál de los siguientes tipos de amenazas de ciberseguridad se refiere a la exposición de información sensible, ya sea debido a un error humano, una vulnerabilidad de seguridad o un ataque intencionado?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Fugas de Datos',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Malware'],
                    ['cod' => 'b', 'text' => 'Phishing'],
                    ['cod' => 'c', 'text' => 'Fugas de Datos'],
                    ['cod' => 'd', 'text' => 'Ataques a la Identidad'],
                ]
            ],
            [
                'text' => '¿Qué consecuencia puede resultar de la pérdida de datos debido a amenazas de ciberseguridad?',
                'examen_id' => $idemcredes,
                'answer' => 'a',
                'correct_answer' => 'Consecuencias financieras y legales',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Consecuencias financieras y legales'],
                    ['cod' => 'b', 'text' => 'Pérdida de productividad'],
                    ['cod' => 'c', 'text' => 'Daño a la reputación'],
                    ['cod' => 'd', 'text' => 'Costos de recuperación'],
                ]
            ],
            [
                'text' => '¿Cuál es el impacto de los ataques exitosos en una empresa en términos de sus operaciones comerciales?',
                'examen_id' => $idemcredes,
                'answer' => 'b',
                'correct_answer' => 'Pérdida de productividad y costos de recuperación',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Consecuencias financieras y legales'],
                    ['cod' => 'b', 'text' => 'Pérdida de productividad y costos de recuperación'],
                    ['cod' => 'c', 'text' => 'Daño a la reputación'],
                    ['cod' => 'd', 'text' => 'Impacto en la privacidad'],
                ]
            ],
            [
                'text' => '¿Cuál es una de las consecuencias de las violaciones de seguridad en términos de la reputación de una empresa?',
                'examen_id' => $idemcredes,
                'answer' => 'c',
                'correct_answer' => 'Daño a la reputación',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Consecuencias financieras y legales'],
                    ['cod' => 'b', 'text' => 'Pérdida de productividad y costos de recuperación'],
                    ['cod' => 'c', 'text' => 'Daño a la reputación'],
                    ['cod' => 'd', 'text' => 'Impacto en la privacidad'],
                ]
            ],
            [
                'text' => '¿Qué recursos deben gastar las organizaciones para recuperarse de los ataques de ciberseguridad y fortalecer su seguridad?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Costos de recuperación',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Consecuencias financieras y legales'],
                    ['cod' => 'b', 'text' => 'Pérdida de productividad y costos de recuperación'],
                    ['cod' => 'c', 'text' => 'Daño a la reputación'],
                    ['cod' => 'd', 'text' => 'Costos de recuperación'],
                ]
            ],
            [
                'text' => '¿Cómo pueden los individuos verse afectados en términos de privacidad personal y financiera como resultado de amenazas de ciberseguridad?',
                'examen_id' => $idemcredes,
                'answer' => 'd',
                'correct_answer' => 'Impacto en la privacidad',
                'category' => 'Ciberseguridad',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Consecuencias financieras y legales'],
                    ['cod' => 'b', 'text' => 'Pérdida de productividad y costos de recuperación'],
                    ['cod' => 'c', 'text' => 'Daño a la reputación'],
                    ['cod' => 'd', 'text' => 'Impacto en la privacidad'],
                ]
            ]
        ];


        foreach ($preguntasbasedatos as $menuData) {
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
 

        foreach ($preguntasredes as $menuData) {
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
