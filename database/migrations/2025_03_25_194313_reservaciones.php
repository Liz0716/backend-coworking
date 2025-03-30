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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_espacio')->references('id')->on('espacios');
            $table->enum('estado',['pendiente', 'confirmada', 'cancelada']);
            $table->double('precio');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
