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


        Schema::create('vehicles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('year');
            $table->uuid('exemplar_id');
            $table->text('color');
            $table->text('version');
            $table->integer('renavam');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('exemplar_id')
                ->references('id')
                ->on('exemplars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
