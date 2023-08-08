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
            $table->uuid('report_evaluation_id')->index();
            $table->uuid('consultant_id')->index();
            $table->uuid('vehicle_user_id')->index();
            $table->text('report_status')->comment("Status of aprovation or reprovation about the consultancy");
            $table->text('observation')->nullable();
            $table->text('status');
            $table->timestamps();

            $table->foreign('report_evaluation_id')
                ->references('id')
                ->on('report_evaluations');

            $table->foreign('consultant_id')
                ->references('id')
                ->on('users');
            $table->foreign('vehicle_user_id')
                ->references('id')
                ->on('vehicle_users');
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
