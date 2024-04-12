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
        Schema::table('paiolthrees', function (Blueprint $table) {
            $table->dropColumn('data_recebido');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paiolthrees', function (Blueprint $table) {
            // Adicione a coluna 'telefone' novamente aqui (opcional)
            $table->string('data_recebido')->nullable();
        });
    
    }
};
