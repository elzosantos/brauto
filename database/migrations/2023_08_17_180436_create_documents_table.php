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
        Schema::create('documents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');
            $table->integer('num_chassi');
            $table->integer('num_motor');
            $table->integer('doc_rodagem');
            $table->integer('rec_compra_venda');
            $table->integer('manuais');
            $table->integer('chave_principal');
            $table->integer('chave_reserva');
            $table->integer('placa_lacre');
            $table->text('observation');
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
        Schema::dropIfExists('hist_dados');
    }
};
