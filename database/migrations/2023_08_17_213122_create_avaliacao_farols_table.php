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
        Schema::create('avaliacao_farols', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');
            $table->integer('farois');
            $table->integer('farois_aux');
            $table->integer('DRL');
            $table->integer('piscas_laterais');
            $table->integer('lanternas');
            $table->integer('luzes_placas');
            $table->integer('obs_luzes_placas');
            $table->integer('teste_lampadas');
            $table->integer('obs_teste_lampadas');

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
        Schema::dropIfExists('avaliacao_farols');
    }
};
