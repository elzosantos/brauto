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
        Schema::create('fipes', function (Blueprint $table) {
          
            $table->integer('year');	
            $table->integer('month');	 
            $table->integer('type');	 
            $table->integer('brand_id');	 
            $table->text('brand');	 
            $table->integer('exemplar_id');	 
            $table->text('exemplar');	 
            $table->integer('exemplar_year');	 
            $table->text('fuel');	 
            $table->integer('value');	 
             

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fipes');
    }
};
