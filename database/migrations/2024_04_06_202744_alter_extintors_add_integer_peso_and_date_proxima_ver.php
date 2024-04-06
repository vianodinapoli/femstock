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
        Schema::table('extintors', function (Blueprint $table) {
            $table->integer('peso')->change(); // Altera a coluna "peso" de string para integer
            $table->date('proxima_ver')->change(); // Altera a coluna "proxima_ver" de string para date
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('extintors', function (Blueprint $table) {
            $table->string('peso')->change(); // Revertendo as alterações caso precise
            $table->string('proxima_ver')->change(); // Revertendo as alterações caso precise
        });
    }
};
