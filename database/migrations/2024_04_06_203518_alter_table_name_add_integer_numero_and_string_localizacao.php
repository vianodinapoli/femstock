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
        Schema::table('extintors', function (Blueprint $table) {
            $table->integer('numero')->change(); // Altera "numero" para integer
            $table->string('localizacao')->change(); // Altera "localizacao" para string
        });
    }
    
    public function down()
    {
        Schema::table('extintors', function (Blueprint $table) {
            $table->string('numero')->change(); // Reverte "numero"
            $table->integer('localizacao')->change(); // Reverte "localizacao"
        });
    }
};
