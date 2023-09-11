<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativaMarcada extends Model
{
    use HasFactory;
    protected $fillable=['examen_alumno_id', 'pregunta', 'respuesta', 'marco', 'puntos'];
}
