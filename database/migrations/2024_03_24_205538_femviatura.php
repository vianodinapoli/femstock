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
        Schema::create('femviaturas', function (Blueprint $table) {
            $table->id();
    $table->string('marca');
    $table->string('modelo');
    $table->string('cor');
    $table->integer('ano_fabricacao');
    $table->date('seguro');
    $table->date('inspecao');
    $table->string('documento');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('femviaturas');
    }
};
