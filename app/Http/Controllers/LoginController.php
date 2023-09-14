<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function autenticar(Request $request){
        if (Session::has('dni')) {
            echo 'LA SESSION YA FUE INICIADO';
        } else {
            $mensajes = [
                'required' => 'El campo :attribute es obligatorio.',
                'email'    => 'El :attribute no es una dirección de correo válida.'
            ];
            $request->validate([
                'name'     => 'required',
                'password'  => 'required'
            ], $mensajes);
    
            $credentials = $request->only('name', 'password');
    
            if(Auth::attempt($credentials)){
                return redirect()->intended('/inicio');
            }
            
            return redirect('login')->with('error', 'Datos inválidos');

            // $mensajes = [
            //     'required' => 'El campo :attribute es obligatorio.',
            //     'email'    => 'El :attribute no es una dirección de correo válida.'
            // ];
            // $request->validate([
            //     'dni'     => 'required',
            //     'apenom'  => 'required'
            // ], $mensajes);



            // Session::put('dni', $request->dni);
            // Session::put('apenom', $request->apenom);

            // return redirect()->intended('/examen');
        }



    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
