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
        Schema::create('paioltwos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->date('data_recebido');
            $table->string('numero_lote');
            $table->date('data_producao');
            $table->date('data_validade');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paioltwos');
    }
};
