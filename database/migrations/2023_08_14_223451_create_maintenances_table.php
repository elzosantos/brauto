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

/*TODO
        1. Criar uma lista de itens para a manutenção
        2. Criar uma tabela auxiliar para registrar pra quais veiculos e marcas a manutenção é sugerida
*/
        Schema::create('maintenances', function (Blueprint $table) {
            $table->uuid('id')->primary();
           // $table->integer('brand_id');
            //$table->text('exemplar');
            $table->integer('km');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
