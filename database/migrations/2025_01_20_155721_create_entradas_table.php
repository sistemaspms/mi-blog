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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->text('contenido')->nullable();
            $table->timestamp('fecha_publicacion')->useCurrent();
            $table->enum('estado', ['proceso', 'finalizado'])->default('proceso');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');


    }
};
