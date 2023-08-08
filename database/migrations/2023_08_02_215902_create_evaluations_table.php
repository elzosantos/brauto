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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('report_id');
            $table->text('grupo');
            $table->text('subgroup');
            $table->text('area');
            $table->text('item'); 
            $table->text('status_evaluation');
            $table->text('observation');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('report_id')
                ->references('id')
                ->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
