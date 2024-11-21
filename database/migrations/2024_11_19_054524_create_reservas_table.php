<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('turista_id')->constrained('turistas')->onDelete('cascade'); // Relacionamento
            $table->string('pacote');
            $table->integer('numero_pessoas');
            $table->date('data_reserva');
            $table->string('metodo_pagamento');
            $table->decimal('preco_total', 10, 2);
            $table->text('preferencias')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
