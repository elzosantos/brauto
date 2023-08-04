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
        /*
          id integer [primary key]
  consultant_id integer
  client_id integer
  vehicle_id integer
  report_evaluation_id integer
  report_status varchar
  observation varchar
  status integer
  created_at timestamp
  updated_at timestamp
        */
        Schema::create('reports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('consultant_id')->index();
            $table->uuid('client_id')->index();
            $table->uuid('vehicle_id')->index();
            $table->text('report_status')->comment("Status of aprovation or reprovation about the consultant");
            $table->text('status');
            $table->timestamps();

            $table->foreign('client_id')
                ->references('id')
                ->on('users');

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
