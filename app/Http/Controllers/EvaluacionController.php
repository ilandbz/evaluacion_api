<?php

namespace App\Http\Controllers;

use App\Models\AlternativaMarcada;
use App\Models\Alumno;
use App\Models\Especialidad;
use App\Models\Examen;
use App\Models\ExamenAlumno;
use App\Models\Pregunta;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	public function index(){
        $alumno=Alumno::where('id', Auth::user()->id)->first();
		$fechaHoraActual = Carbon::now();
		$data['fechaHoraActual'] = $fechaHoraActual;
        $data['alumno'] = $alumno;
        $examen=Examen::where('especialidad_id', $alumno['especialidad_id'])->orderBy('fecha', 'desc')->first();
		$data['examen']=$examen;
		$examenalumno = Examenalumno::where('alumno_id', $alumno->id)->where('examen_id', $examen->id)->first();
		if($examenalumno){
			$data['mensaje']='YA RINDIO EL EXAMEN';
		}else if($fechaHoraActual->format('Y-m-d H:i:s')>$examen->fecha.' '.$examen->hora_inicio && 
			$fechaHoraActual->format('Y-m-d H:i:s')<$examen->fecha.' '.$examen->hora_fin){
			$data['mensaje']='SUCCESS';
		}else{
			$data['mensaje']='NO SE ENCUENTRA EN LA FECHA Y HORA ESTABLECIDA, NO CORRESPONDE';
		}
        return view('app', $data);	
	}

    public function examen()
    {
        $alumno=Alumno::where('id', Auth::user()->id)->first();
        $data['alumno'] = $alumno;
        $examen=Examen::where('id', 1)->first();
        $data['examen']=$examen;
        $data['preguntas']=Pregunta::where('examen_id', $examen->id)->inRandomOrder()->limit(10)->get();
        return view('paginas/examen', $data);
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function store(Request $request)
    {
		$mensajes = [
			'required' => 'El campo :attribute es obligatorio.',
			'email'    => 'El :attribute no es una dirección de correo válida.'
		];
		$request->validate([
			'dni'     			=> 'required|unique:alumnos,dni',
			'apenom'  			=> 'required',
			'especialidad_id'   => 'required',
		], $mensajes);

		$alumno = Alumno::firstorCreate([
			'dni'   			=> $request->dni,
			'apenom'			=> $request->apenom,
			'especialidad_id'	=> $request->especialidad_id
		]);
		User::firstorCreate([
			'name'   			=> $request->dni,
			'password'			=> Hash::make($request->dni),
			'alumno_id'	=> $alumno->id
		]);
		Session::flash('success', '¡Registro exitoso!');

		return redirect()->route('register');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function resolver(Request $request){
		$preguntas= $request->pregunta_marcacion;
		$puntajetotal = 0; 
		$incorrectas =0;
		$miarreglo=null;
		foreach ($preguntas as $fila) {
			$marcado = $fila['marcado'] ?? "NINGUNO";
			$row['punto']=0;
			$pregunta = Pregunta::find($fila['idpregunta']);
			if($pregunta['correct_answer']==$marcado){
				$puntajetotal+=$pregunta['punto'];
				$row['punto']=$pregunta['punto'];
			}else{
				$incorrectas++;
			}
			$row['descripcion']=$pregunta['text'];
			$row['marcado']=$marcado;
			$row['respuesta']=$pregunta['correct_answer'];
			$miarreglo[]=$row;
		}
		$examenalumno = ExamenAlumno::create([
			'alumno_id' => $request->alumno_id,
			'examen_id' => $request->idexamen,
			'tiempo_rendido' => $request->tiempo_rendicion,
			'fecha_hora'	=> date('Y-m-d'),
			'totalincorrectas' => $incorrectas,
			'nota' => $puntajetotal,
			'estado' => $puntajetotal>=13 ? 'APROBADO' : 'DESAPROBADO',
		]);
		foreach($miarreglo as $fila){
			AlternativaMarcada::firstOrCreate([
				'examen_alumno_id' => $examenalumno->id,
				'pregunta' => $fila['descripcion'],
				'respuesta' => $fila['respuesta'],
				'marco' => $fila['marcado'],
				'puntos'	=> $fila['punto']
			]);
		}
		return redirect('examen-resuelto?id='.$examenalumno->id);
	}
	function register_alumno(){
		$especialidades = Especialidad::get();
		return view('paginas.register', compact('especialidades'));
	}
	function examen_resuelto(Request $request){
		$data['examenalumno']=ExamenAlumno::with('alternativasMarcadas', 'alumno:id,apenom,dni')
		->where('id', $request->id)->first();
		$data['registros']=AlternativaMarcada::where('examen_alumno_id', $request->id)->get();
		return view('paginas/resultado', $data);		
	}
}
