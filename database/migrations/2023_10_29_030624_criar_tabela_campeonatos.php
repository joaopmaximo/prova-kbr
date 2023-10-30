<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_campeonato');
            $table->string('imagem');
            $table->string('cidade_estado');
            $table->date('data_realizacao');
            $table->string('sobre_evento');
            $table->string('ginasio');
            $table->string('informacoes_gerais');
            $table->string('entrada_publico')->nullable();
            $table->string('tipo');
            $table->string('fase');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
