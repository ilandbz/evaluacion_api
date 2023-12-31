<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examen_alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('examen_id')->constrained('examens')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->time('tiempo_rendido');
            $table->dateTime('fecha_hora');
            $table->integer('totalincorrectas');
            $table->decimal('nota');
            $table->string('estado');
            //$table->string('estado')->default('Rindiendo');
            $table->unique(['alumno_id', 'examen_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_alumnos');
    }
};
