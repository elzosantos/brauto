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
        Schema::create('analise_pinturas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultancy_id');
            $table->integer('tipo_consultancy');
            $table->integer('teto_capota');
            $table->integer('obs_teto_capota');

            $table->integer('col_a_esq_mot');
            $table->integer('obs_col_a_esq_mot');

            $table->integer('col_b_esq_mot');
            $table->integer('obs_col_b_esq_mot');

            $table->integer('col_c_esq_mot');
            $table->integer('obs_col_c_esq_mot');

            $table->integer('lat_tras_esq_mot');
            $table->integer('obs_lat_tras_esq_mot');

            $table->integer('port_tras_esq_mot');
            $table->integer('obs_port_tras_esq_mot');

            $table->integer('port_diant_esq_mot');
            $table->integer('obs_port_diant_esq_mot');

            $table->integer('para_lama_esq_mot');
            $table->integer('obs_para_lama_esq_mot');

            $table->integer('col_a_dir_psg');
            $table->integer('obs_col_a_dir_psg');

            $table->integer('col_b_dir_psg');
            $table->integer('obs_col_b_dir_psg');

            $table->integer('col_c_dir_psg');
            $table->integer('obs_col_c_dir_psg');

            $table->integer('lat_tras_dir_psg');
            $table->integer('obs_lat_tras_dir_psg');

            $table->integer('port_tras_dir_psg');
            $table->integer('obs_port_tras_dir_psg');

            $table->integer('port_diant_dir_psg');
            $table->integer('obs_port_diant_dir_psg');

            $table->integer('para_lama_dir_psg');
            $table->integer('obs_para_lama_dir_psg');

            $table->integer('capo');
            $table->integer('obs_capo');

            $table->integer('para_choq_diant');
            $table->integer('obs_para_choq_diant');

            $table->integer('tampa_tras');
            $table->integer('obs_tampa_tras');

            $table->integer('para_choq_tras');
            $table->integer('obs_para_choq_tras');

            $table->integer('caixa_ar_mot');
            $table->integer('obs_caixa_ar_mot');

            $table->integer('caixa_ar_psg');
            $table->integer('obs_caixa_ar_psg');

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
        Schema::dropIfExists('analise_pinturas');
    }
};
