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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->string('marca_destino');
            $table->string('referencia');
            $table->string('descricao');
            $table->date('data');
            $table->integer('pecas_entradas');
            $table->integer('pecas_saidas');
            $table->integer('quantidade');
            $table->decimal('custo_unitario', 8, 2);
            $table->decimal('custo_total', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
