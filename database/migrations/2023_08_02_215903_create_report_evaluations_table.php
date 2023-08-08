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

 
        Schema::create('report_evaluations', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('evaluation_id')->index();
            $table->integer('status');
            $table->timestamps();

       
            $table->foreign('evaluation_id')
                ->references('id')
                ->on('evaluations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_evaluations');
    }
};
