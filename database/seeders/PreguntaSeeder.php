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
        $id2= Examen::where('titulo', 'PRACTICA CALIFICADA 2 SOFTWARE EN LA ADMINISTRACION DE BASE DE DATOS')->value('id'); 

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
            [
                'text' => 'Cuál es la función principal del núcleo (kernel) en un sistema operativo?',
                'examen_id' => $id2,
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
                'text' => '¿Qué es un compilador en el contexto de lenguajes de programación?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿Qué define al enfoque Scrum en el desarrollo de software?',
                'examen_id' => $id2,
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
                'text' => 'Cuál es una ventaja de las metodologías ágiles en comparación con las tradicionales?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿En qué se enfoca la metodología Kanban?',
                'examen_id' => $id2,
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
                'text' => '¿Qué implica la metodología DevOps en el desarrollo de software?',
                'examen_id' => $id2,
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
                'text' => '¿Qué beneficio principal ofrece Lean Development en el desarrollo de software?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿En qué se enfoca el modelo en V en comparación con el modelo en cascada?',
                'examen_id' => $id2,
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
                'text' => '¿Qué es un beneficio común de las metodologías iterativas e incrementales?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿Cuál es una característica clave de los lenguajes compilados?',
                'examen_id' => $id2,
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
                'text' => '¿Qué es un compilador en el contexto de lenguajes de programación?',
                'examen_id' => $id2,
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
                'text' => '¿Cuál de las siguientes opciones describe mejor el proceso de compilación?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿Qué es una característica distintiva de las metodologías ágiles?',
                'examen_id' => $id2,
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
                'text' => '¿Qué define al enfoque Scrum en el desarrollo de software?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿En qué se enfoca la metodología Kanban?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿Qué implica la metodología DevOps en el desarrollo de software?',
                'examen_id' => $id2,
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
                'text' => '¿Qué beneficio principal ofrece Lean Development en el desarrollo de software?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿En qué se enfoca el modelo en V en comparación con el modelo en cascada?',
                'examen_id' => $id2,
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
                'text' => '¿Qué es un beneficio común de las metodologías iterativas e incrementales?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'text' => '¿Qué es un compilador en el contexto de lenguajes de programación?',
                'examen_id' => $id2,
                'answer' => 'b',
                'correct_answer' => 'Un programa que traduce código fuente a lenguaje de máquina.',
                'category' => 'LENGUAJES DE PROGRAMACIÓN',
                'alternativas' => [
                    ['cod' => 'a', 'text' => 'Un programa que ejecuta código fuente.'],
                    ['cod' => 'b', 'text' => 'Un programa que traduce código fuente a lenguaje de máquina.'],
                    ['cod' => 'c', 'text' => 'Un intérprete en tiempo real.'],
                    ['cod' => 'd', 'text' => 'Una base de datos.'],
                ]
            ],
            [
                'text' => '¿Cuál es una característica de los lenguajes interpretados?',
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
                'examen_id' => $id2,
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
 
        ];

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
