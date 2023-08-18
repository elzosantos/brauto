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
        Schema::create('avaliacao_cintos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');
            $table->integer('motorista');
            $table->integer('ano_motorista');
            $table->integer('passageiro');
            $table->integer('ano_passageiro');
            $table->text('obs'); 
            $table->integer('status');
            $table->timestamps();

            $table->foreign('consultancy_id')
                ->references('id')
                ->on('consultancies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao_cintos');
    }
};
