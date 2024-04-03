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
        Schema::create('extintors', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('agente');
            $table->string('peso');
            $table->integer('localizacao');
            $table->date('verificado');
            $table->string('proxima_ver');
            $table->timestamps();
                });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extintors');
    }
};
