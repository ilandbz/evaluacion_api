<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamenAlumno extends Model
{
    protected $fillable=['alumno_id', 'examen_id', 'fecha_hora', 'tiempo_rendido', 'totalincorrectas', 'nota', 'estado'];
    use HasFactory;

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
    public function alternativasMarcadas()
    {
        return $this->hasMany(AlternativaMarcada::class,'examen_alumno_id');
    }
}
