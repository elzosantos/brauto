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
        Schema::create('avaliacao_vidros', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');
            $table->integer('para_brisa');
            $table->integer('ano_para_brisa');

            $table->integer('lat_esq');
            $table->integer('ano_lat_esq');

            $table->integer('lat_dir');
            $table->integer('ano_lat_dir');

            $table->integer('traseiro');
            $table->integer('ano_traseiro');

            $table->integer('teto_solar');
            $table->integer('ano_teto_solar');

            $table->integer('retrovisores');
            $table->integer('ano_retrovisores');
            $table->text('obs_retrovisores');

            $table->integer('limpa_diant');
            $table->integer('limpa_tras');
            $table->integer('lente_retro');
            $table->text('obs_lente_retro');


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
        Schema::dropIfExists('avaliacao_vidros');
    }
};
