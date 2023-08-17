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

        Schema::create('reports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultant_id');
            $table->uuid('vehicle_id');
            $table->text('report_status')->comment("Status of aprovation or reprovation about the consultancy");
            $table->text('observation')->nullable();
            $table->text('status');
            $table->timestamps();

   

            $table->foreign('consultant_id')
                ->references('id')
                ->on('users');
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
