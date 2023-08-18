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
        Schema::create('avaliacao_cofres', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');

            $table->integer('vest_par_capo');
            $table->integer('vest_par_paralama');
            $table->integer('pres_plast');
            $table->integer('pared_cort_fog');
            $table->integer('revest_capo');
            $table->integer('haste_amort');
            $table->integer('capas_cob');
            $table->integer('sist_adm');
            $table->integer('reser_flui_arref');
            $table->integer('reser_oleo_dir');
            $table->integer('reser_oleo_freio');
            $table->integer('reser_part_frio');
            $table->integer('reser_limp_para');
            $table->integer('var_med_oleo');
            $table->integer('bocal_abs_oleo');
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
        Schema::dropIfExists('avaliacao_cofres');
    }
};
